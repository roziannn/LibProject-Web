@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <div class="row">
        @include('dashboard.layouts.account.settings.sidebar-user')
        <div class="col-md-9">
            <div class="card content p-5">
                @if (session()->has('success'))
                    <div class="alert alert-success col-lg-8" role="alert" style="width:100%">
                        {{ session('success') }}
                    </div>
                @endif
                {{-- <strong class="fs-5 mb-1">Hi, {{ auth()->user()->name }} !</strong> --}}
                <div class="d-flex justify-content-between">
                    <h5>Event yang kamu ikuti</h5>
                    <div class="text-right">
                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" onchange="window.location.href = this.value;">
                            <option value="">Selesai</option>
                            <option value="">Semua Event</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12 mt-5">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card white-bg shadow">
                                    {{-- <div class="position-absolute px-2 py-1 fs-6 bg-dark"><a
                                            href="/posts?category={{ $post->category->slug }}"
                                            class="text-white text-decoration-none">{{ $post->category->name }}</a></div> --}}
                                    {{-- <a href="/posts/{{ $post->slug }}">
                                        @if ($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}"
                                                style="height: 200px; width:auto;" alt="{{ $post->category->name }}"
                                                class="img-fluid">
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
                                    </div>
                                </div>
                            </div>
                        --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection
