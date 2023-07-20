@extends('layouts.main')
@include('partials.navbar')
@section('container')
    @if (session()->has('deleteSuccess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('deleteSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row mb-5">
        <div class="col-lg-9 pr-5 ">
            <div class="col-lg-12 rounded">
                <div class="content-info d-flex align-items-center justify-content-between mb-3">
                    <div class="content-name-head">
                        <h4>{{ $post->title }}</h4>
                    </div>
                    <div class="content-user-actions d-block">
                        <a href="#" class="icon-mini-btn btn btn-light" id="post-btn-{{ $post->id }}"
                            onclick="likePost({{ $post->id }})">
                            <span id="post-likescount-{{ $post->id }}">{{ $post->likes_count }}</span>
                            <i class="like-icon {{ $post->is_liked() ? 'fas fa-thumbs-up' : 'bi bi-hand-thumbs-up' }}"></i>
                        </a>
                    </div>
                </div>

                <div class="content-info d-flex align-items-center mb-3">
                    <div class="d-flex created-by-user align-items-center">
                        <div class="created-by-user avatar">
                            <img src="{{ asset('img/avatar/' . $post->user->avatar) ?: 'https://ui-avatars.com/api/?size=128&background=random&name=' . $post->user->username }}"
                                class="rounded-circle ml-2 m-1" alt="" width="32" height="32">
                        </div>
                        <div class="created-by-user name my-1 mx-1 d-flex justify-content-center align-items-center">
                            <small class="fs-6 font-weight-600">{{ $post->user->name }}</small>
                        </div>
                        <span class="mx-1 text-muted">•</span>
                        <h6 class="mb-0">Project <a href="{{ url('posts?category=' . $post->category->slug) }}"
                                class="text-decoration-none">{{ $post->category->slug }}</a></h6>
                    </div>
                </div>


                <div class="content-overview">
                    @if ($post->image)
                        <div style="max-height: auto; overflow:hidden">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                class="img-fluid">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400? {{ $post->category->name }}"
                            alt="{{ $post->category->name }}" class="img-fluid">
                    @endif
                </div>
                
                {{-- post body --}}
                <article class="my-3 mt-3">
                    {!! $post->body !!}
                </article>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="d-flex border-bottom mb-3">
                <h5>Komentar</h5><i class="bi bi-chat-dots left-text mx-2"></i>
            </div>
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
                            {{-- like untuk komentar --}}
                            <a href="#" id="comment-btn-{{ $comment->id }}" style="text-decoration: none"
                                onclick="like({{ $comment->id }}, 'COMMENT')">
                                <span class="like-text">
                                    {{ $comment->is_liked() ? 'Unlike' : 'Like' }}
                                </span>
                            </a>
                            <span class="comment-section-text">
                                @php
                                    $diff = $comment->created_at->diff(now());
                                    
                                    if ($diff->m > 0) {
                                        $diff = ceil($diff->days / 7) . 'w';
                                    } else {
                                        $diff = $comment->created_at->diffForHumans();
                                    }
                                @endphp
                                {{ $diff }}
                            </span>

                            <span class="comment-count-text"
                                id="post-likescount-{{ $comment->id }}">{{ $comment->likes_count }}</span><span
                                class="comment-count-text"> likes</span>
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
        let likesCount = document.getElementById('post-likescount-' + id);
        let likeText = document.getElementById('comment-btn-' + id).querySelector('.like-text');

        fetch('/like/' + type + '/' + id)
            .then(response => response.json())
            .then(data => {
                let currentCount = parseInt(likesCount.innerText);

                if (data.status === 'LIKE') {
                    currentCount += 1;
                    likeText.innerText = 'Unlike';
                } else {
                    currentCount -= 1;
                    likeText.innerText = 'Like';
                }

                likesCount.innerText = currentCount;
            });
    }

    function likePost(id) {
        let likesCount = document.getElementById('post-likescount-' + id);
        let icon = document.getElementById('post-btn-' + id).querySelector('.like-icon');

        fetch('/like/POST/' + id)
            .then(response => response.json())
            .then(data => {
                let currentCount = parseInt(likesCount.innerText);

                if (data.status === 'LIKE') {
                    currentCount += 1;
                    icon.className = 'like-icon fas fa-thumbs-up';
                } else {
                    currentCount -= 1;
                    icon.className = 'like-icon bi bi-hand-thumbs-up';
                }

                likesCount.innerText = currentCount;
            });
    }
</script>
<style>
    @media (min-width: 768px) {
        .pr-5 {
            padding-right: 3rem !important;
        }
    }

    .icon-mini-btn {
        text-decoration: none;
        font-size: 15px;
        margin: 2px;
    }

    .like-text {
        margin-right: 5px;
        font-size: 13px;
        font-weight: bold;
        text-decoration: none;
        color: #565656;
    }

    .comment-section-text {
        margin-right: 5px;
        font-size: 13px;
    }

    .comment-count-text {
        font-size: 13px;
    }
</style>
