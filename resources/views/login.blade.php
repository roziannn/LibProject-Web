@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <link rel="stylesheet" href="css/home.style.css">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width:80% ;">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:80% ;">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="content-wrapper">
        <div class="col-md-4 mx-auto px-3">
            <h4>
                Let's Begin
            </h4>
            <small>Masukan Email dan Password</small>
            <form action="/login" method="post">
                @csrf
                <div class="form-group my-4">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" required placeholder="Enter email" autofocus required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group my-4">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required
                        placeholder="Enter Password" required>
                        <p class="forgot-pass text-right"><a href="/forgotpass">Lupa Password?</a></p>
                </div>
                <div class="log-btn">
                    <button type="submit" class="btn btn-primary mt-3" style="width: 100%">Masuk</a></button>
                </div>
            </form>
            <div class="reg-btn">
                <a href="/register"><button type="submit" class="btn btn-secondary" style="width: 100%">Daftar Akun</button></a>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection

<style>
    .forgot-pass a {
        text-decoration: none;
        font-size: 14px; 
    }
</style>