@extends('layouts.main')
@include('partials.navbar')

@section('container')
    @if (session()->has('deleteSuccess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('deleteSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-left mb-5">
            <div class="col-md-8">
                <div class="item-join d-flex justify-content-between">
                    <div class="mr-auto">
                        <h3 class="mb-3">{{ $post->title }}</h3>
                    </div>
                    <div class="join-button">
                        <button type="button" class="btn btn-primary btn-sm text-white"> + Join Project</button>
                    </div>
                </div>

                <p><a href="#/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }} </a> in <a
                        href="/posts?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a></p>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400? {{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif



                <div class="d-flex mt-3">
                    {{-- like for post --}}
                    <span id="post-likescount-{{ $post->id }}">{{ $post->likes_count }}</span>
                    <button class="btn btn-primary btn-sm" id="post-btn-{{ $post->id }}"
                        onclick="like({{ $post->id }})">
                        {{ $post->is_liked() ? 'unlike' : 'like' }}
                    </button>
                </div>
                    {{-- post body --}}
                <article class="my-3 mt-3">
                    {!! $post->body !!}
                </article>
                <a href="/posts" class="d-block mt-5">Back to Project</a>
            </div>

            <div class="col-md-4">
                <h5>Komentar</h5>
                <hr>

                @foreach ($post->comments as $comment)
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-between">
                            <a href="#" style="text-decoration:none"> {{ $comment->user->name }}</a>
                            @if ($comment->user->id == auth()->user()->id)
                                <a href="/post-comment/delete{{ $comment->id }}"
                                    style="font-size: 13px; text-decoration:none;">Hapus</a>
                            @endif

                        </div>
                        <div class="d-flex">
                            <p>{{ $comment->subject }}
                                <br>
                                <span style="font-size: 11px">{{ $comment->created_at->diffForhumans() }}</span>
                                {{-- like untuk komentar --}}
                                <a href="#" id="comment-btn-{{ $comment->id }}"
                                    onclick="like({{ $comment->id }}, 'COMMENT')">
                                    {{ $comment->is_liked() ? 'unlike' : 'like' }}
                                </a>
                                <span style="font-size: 11px"
                                    id="comment-likescount-{{ $comment->id }}">{{ $comment->likes_count }}</span>
                            </p>
                        </div>

                    </div>
                @endforeach
                <form method="POST" action="/post-comment/{{ $post->id }}">
                    @csrf
                    <div class="form-group">
                        <label for="subject"></label>
                        <textarea class="form-control" name="subject" id="subject" rows="3" style="width: 100%;"></textarea>
                    </div>
                    <div class="item-button mt-3 text-right">
                        <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
    <style>
        .text-static {
            color: #9e9ea7;
            text-decoration: none;
            font-size: 14px;
        }
    </style>

    {{-- script condition while user click like post and like comment button  --}}
    <script>
        function like(id, type = 'POST') {
            // default type = post

            let likesCount = 0 //count from 0
            let el = ''

            if (type == 'POST') {
                el = document.getElementById('post-btn-' + id)
                likesCount = document.getElementById('post-likescount-' + id)

            } else {
                el = document.getElementById('comment-btn-' + id)
                likesCount = document.getElementById('comment-likescount-' + id)

            }


            fetch('/like/' + type + '/' + id)
                .then(response => response.json())
                .then(data => {
                    let currentCount = 0

                    if (data.status == 'LIKE') {
                        currentCount = parseInt(likesCount.innerHTML) + 1
                        el.innerText = 'unlike'
                    } else {
                        currentCount = parseInt(likesCount.innerHTML) - 1
                        el.innerText = 'like'
                    }

                    likesCount.innerHTML = currentCount
                });
        }
    </script>
