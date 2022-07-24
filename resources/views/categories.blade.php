@extends('layouts.main')
@include('partials.navbar')
@section('container')

<h2 class="mb-5">Post Category</h2>

@foreach ($categories as $category)
    <ul>
        <li>
            <h3><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h3>
        </li>
    </ul>
    
@endforeach


@endsection