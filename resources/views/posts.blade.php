@extends('layouts.main')
@include('partials.navbar')
@section('container')

    <link rel="stylesheet" href="css/home.style.css">

    <div class="text-head text-center mb-5">
        <strong class="text-center fs-2">{{ $title }}!</strong>
        <p>Hasil project dan karya yang telah diselesaikan</p>
    </div>

    <div class="row justify-content-center mx-1 mb-3">
        <div class="col-md-2">
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" onchange="window.location.href = this.value;">
                <option value="">Cari berdasarkan</option>
                <option value="{{ url('/posts') }}">Semua Project</option>
                @foreach ($categories as $category)
                    <option value="{{ url('posts?category=' . $category->slug) }}">{{ $category->name }}</option>
                @endforeach
            </select>            
        </div>
        <div class="col-md-4">
            <form action="/posts">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>


    <div class="container">
        @if ($posts->count())
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-12 col-md-3 mb-4">
                        <div class="card white-bg shadow">
                            <a href="/posts/{{ $post->slug }}">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" style="height:230px; width:auto;"
                                        alt="{{ $post->category->name }}" class="img-fluid rounded">
                                @else
                                    <img src="https://source.unsplash.com/220x140? {{ $post->category->name }}"
                                        class="card-img-top" alt="{{ $post->category->name }}">
                                @endif
                            </a>

                            <div class="card-body">
                                <span class="card-title fs-5">{{ $post->title }}</span>
                                <div class="d-flex created-by-user">
                                    <div class="created-by-user avatar">
                                        <img src="{{ asset('img/avatar/' . $post->user->avatar) ?: 'https://ui-avatars.com/api/?size=128&background=random&name=' . $post->user->username }}"
                                            class="rounded-circle ml-2 m-1" alt="" width="24" height="24">
                                    </div>
                                    <div class="created-by-user name my-1 mx-1">
                                        <small class="text-muted">{{ $post->user->name }}</small>
                                    </div>
                                </div>

                                {{-- <small class="card-text">{!! $post->body !!}</small> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
    @include('partials.footer')
@else
    <p class="text-center fs-4">No project found.</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>

@endsection

<style>
    .card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 36px;
    }

    .badge {
        margin: 8;
    }

    .card-title {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .card-text {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
