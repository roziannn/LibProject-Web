@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <link rel="stylesheet" href="css/home.style.css">

    <div class="content-wrapper">
        <div class="col-md-4 mx-auto px-3">
            <h4>
                Buat akun baru
            </h4>
            <small>Lengkapi form berikut</small>
            <form action="/register" method="post">
                @csrf
                <div class="form-group my-4">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        id="name" placeholder="Full Name" required value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group my-4">
                    <label for="username">Username</label>
                    <input type="text" name="username"
                        class="form-control @error('username') is-invalid @enderror" id="username"
                        placeholder="Username" required value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                            username must be under 20 character
                        </div>
                    @enderror
                </div>

                <div class="form-group my-4">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="Enter email" required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group my-4">
                    <label for="password">Password</label>
                    <input type="password" name="password"
                        class="form-control @error('password') is-invalid @enderror" id="password"
                        placeholder="Password" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <small>Gunakan minimal 8 karakter dengan kombinasi huruf dan angka</small>
                </div>
                <button type="submit" class="btn btn-primary my-3" style="width: 100%">Daftar Akun</button>
            </form>
        </div>
    </div>
    @include('partials.footer')
@endsection
