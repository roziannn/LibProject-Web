@extends('layouts.main')
@include('partials.navbar')
@section('container')
<link rel="stylesheet" href="css/home.style.css">

<h2 class="mb-4 mt-5 text-center" style="font-weight: 700;">{{ $title }}</h2>

<div class="row justify-content-center mb-5">
    <div class="col-md-6">
        <form action="/posts">
            @if(request('category'))
               <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-outline-primary" type="submit" >Search</button>
            </div>
        </form>
    </div>
</div>

<div class="container">
@if ($posts->count())
    <div class="row">
        @foreach($posts as $post)
            <div class="col-12 col-md-3 mb-4">
                <div class="card">
                    <div class="position-absolute px-2 py-1 fs-6" style="background-color: rgba(0,0,0,0.7);"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>

                    <a href="/posts/{{ $post->slug }}">
                    @if($post->image)
                        <img src="{{ asset('storage/'. $post->image) }}" style="height: 190px; width:100%;" alt="{{ $post->category->name }}" class="img-fluid">
                    @else
                        <img src="https://source.unsplash.com/220x140? {{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @endif
                    </a>

                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->excerpt }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@else
    <p class="text-center fs-4">No project found.</p>
@endif

<div class="d-flex justify-content-center mt-5 mb-5">
    {{ $posts->links() }}
</div>

@endsection

