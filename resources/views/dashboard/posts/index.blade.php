@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <div class="row">
        @include('dashboard.layouts.account.settings.sidebar-user')
        <div class="col-md-9">
            <div class="card content p-4">
                @if (session()->has('success'))
                    <div class="alert alert-success col-lg-8" role="alert" style="width:100%">
                        {{ session('success') }}
                    </div>
                @endif
                <strong class="fs-5 mb-2">Hi, {{ auth()->user()->name }} !</strong>
                <h5>Saat ini kamu telah berpartisipasi dalam 5 proyek</h5>
                <div class="col-lg-12 mt-3">
                    {{-- <table class="table small">
                        <thead>
                            <tr>
                                <th class="align-left">Nama Project</th>
                                <th class="align-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="align-left">{{ $post->title }}</td>
                                    <td class="align-right">
                                        <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-info btn-sm ml-1"><i
                                            class="fas fa-eye text-white"></i></a>
        
                                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm ml-1"><i
                                            class="fas fa-pen-to-square text-white"></i></a>
        
                                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
        
                                        <button class="btn btn-danger btn-sm ml-1" onclick="return confirm('Hapus project?')"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> --}}
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        @foreach ($posts as $post)
                            <div class="col">
                                <div class="card white-bg shadow">
                                    <div class="position-absolute px-2 py-1 fs-6 bg-dark"><a
                                            href="/posts?category={{ $post->category->slug }}"
                                            class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                                    <a href="/posts/{{ $post->slug }}">
                                        @if ($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}"
                                                style="height: 200px; width:auto;" alt="{{ $post->category->name }}"
                                                class="img-fluid">
                                        @else
                                            <img src="https://source.unsplash.com/220x140? {{ $post->category->name }}"
                                                class="card-img-top" alt="{{ $post->category->name }}">
                                        @endif
                                    </a>

                                    <div class="card-body">
                                        <h6 class="card-title">{{ $post->title }}</h6>
                                        <a href="/dashboard/posts/{{ $post->slug }}/edit"
                                            class="btn btn-warning btn-sm ml-1"><i
                                                class="fas fa-pen-to-square text-white"></i></a>

                                        <form action="/dashboard/posts/{{ $post->slug }}" method="post"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm ml-1"
                                                onclick="return confirm('Hapus project?')"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                        {{-- <small class="card-text">{!! $post->body !!}</small> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-right">
                        <a href="/dashboard/posts/create" class="btn btn-primary btn-sm mt-3">Buat Proyek Baru</a>
                    </div>
                </div>
            </div>
        </div>
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
    </style>
