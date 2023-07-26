@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <div class="row">
        @include('dashboard.layouts.account.settings.sidebar-user')
        <div class="col-md-9">
            <div class="card card-content">
                @if (session()->has('success'))
                    <div class="alert alert-success col-lg-8" role="alert" style="width:100%">
                        {{ session('success') }}
                    </div>
                @endif
                <strong class="fs-3 mb-1">Hi, {{ auth()->user()->name }} !</strong>
                <div class="d-flex justify-content-between">
                    <h5>Saat ini kamu telah berpartisipasi dalam {{ auth()->user()->posts->count() }} Project</h5>
                    <div class="text-right">
                        <a href="/dashboard/posts/create" class="btn btn-primary btn-m shadow">Buat Proyek Baru</a>
                    </div>
                </div>
                <div class="col-lg-12 mt-5">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        @foreach ($posts as $post)
                            <div class="col">
                                <div class="card white-bg shadow">
                                    <a href="/posts/{{ $post->slug }}">
                                        @if ($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}"
                                                style="height: 200px; width:auto;" alt="{{ $post->category->name }}"
                                                class="img-fluid w-100">
                                        @else
                                            <img src="https://source.unsplash.com/220x140? {{ $post->category->name }}"
                                                class="card-img-top" alt="{{ $post->category->name }}">
                                        @endif
                                    </a>

                                    <div class="card-body d-flex justify-content-between align-content-between">
                                        <h6 class="card-title">{{ $post->title }}</h6>
                                        <a href="/dashboard/posts/{{ $post->slug }}/edit"
                                            class="btn btn-warning btn-sm ml-1"><i
                                                class="fas fa-pen-to-square text-white"></i></a>

                                        {{-- <form action="/dashboard/posts/{{ $post->slug }}" method="post"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm ml-1"
                                                onclick="return confirm('Hapus project?')"><i
                                                    class="fas fa-trash"></i></button>
                                        </form> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @include('partials.footer')
    @endsection

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        .align-left {
            text-align: left;
        }

        .align-right {
            text-align: right;
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

        .card-content {
            padding: 3rem;
        }

        @media (max-width: 767px) {
            .card-content {
                padding: 1.5rem;
            }
        }
    </style>
