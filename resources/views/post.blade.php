@extends('layouts.main')
@include('partials.navbar')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            

            <div class="item-join d-flex justify-content-between">
                <h3 class="mb-3">{{ $post-> title }}</h3>
                <button class="btn btn-primary"> + Join Project</button>
            </div>

            <p><a href="#/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }} </a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            @if($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            </div>
            @else
                <img src="https://source.unsplash.com/1200x400? {{  $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif

            <article class="my-3">
                {!! $post->body !!}
            </article>
            

            <a href="/posts" class="d-block mt-5">Back to Project</a>
        </div>
    </div>
</div>


        

@endsection
