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
                        <a href="#" class="icon-mini-btn btn btn-primary btn-sm" id="post-btn-{{ $post->id }}"
                            onclick="likePost({{ $post->id }})">
                            <span id="post-likescount-{{ $post->id }}">{{ $post->likes_count }}</span>
                            <i class="like-icon {{ $post->is_liked() ? 'fas fa-thumbs-up' : 'bi bi-hand-thumbs-up' }}"></i>
                        </a>

                        {{-- share icon --}}
                        <a href="#" class="icon-mini-btn btn btn-primary btn-sm" style="margin-left: 5px;">
                            <span>12</span>
                            <i class="bi bi-share"></i>
                        </a>
                    </div>
                    {{-- post body --}}
                    <article class="my-3 mt-3">
                        {!! $post->body !!}
                    </article>
                    {{-- <a href="/posts" style="text-decoration: none" class="d-block mt-5">Back to Project</a> --}}
                </div>

                <div class="col-md-4">
                    <div class="d-flex">
                        <h5>Komentar</h5><i class="bi bi-chat-left-text mx-2"></i>
                    </div>
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
