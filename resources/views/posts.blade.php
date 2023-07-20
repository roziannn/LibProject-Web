@extends('layouts.main')
@include('partials.navbar')
@section('container')

    <link rel="stylesheet" href="css/home.style.css">

    <div class="text-head text-center mb-5">
        <h2 class="text-center" style="font-weight: 500;">{{ $title }}</h2>
        <p>Hasil project dan karya yang telah diselesaikan</p>
    </div>

    <div class="row justify-content-center mx-1 mb-3">
        <div class="col-md-2">
            <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                <option selected>Cari berdasarkan</option>
                @foreach ($categories as $category)
                    <option value="1">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <form action="/posts">
                {{-- @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif --}}
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
                    <div class="col-12 col-md-3 mb-3">
                        <div class="card white-bg shadow">
                            <div class="position-absolute px-2 py-1 fs-6 bg-dark"><a
                                    href="/posts?category={{ $post->category->slug }}"
                                    class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                            <a href="/posts/{{ $post->slug }}">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" style="height: 200px; width:auto;"
                                        alt="{{ $post->category->name }}" class="img-fluid">
                                @else
                                    <img src="https://source.unsplash.com/220x140? {{ $post->category->name }}"
                                        class="card-img-top" alt="{{ $post->category->name }}">
                                @endif
                            </a>

                            <div class="card-body">
                                <h6 class="card-title">{{ $post->title }}</h6>
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
