@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <div class="row mb-5">
       @include('dashboard.layouts.account.settings.sidebar')
        <div class="col-lg-9">
            <div class="card profile-content p-4">
                <strong class="fs-5 border-bottom">Profil Akun</strong>
                <form action="{{ route('account.update') }}" method="POST" enctype="multipart/form-data">
                    @method('patch')
                    @csrf

                    <div class="form-group form-row">
                        <label class="control-label my-2 mt-3" for="avatar">Avatar Profile</label>
                        <div class="row d-flex align-items-center">
                            <div class="col-md-2">
                                @include('components.avatar')
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="file" id="avatar" name="avatar">
                                <small class="form-text text-red text-muted"> Rasio 1 : 1 atau berukuran tidak lebih dari
                                    2MB</small>
                            </div>
                        </div>

                        @if ($errors->has('avatar'))
                            <span class="invalid-feedback" role="alert">
                                {{ $errors->first('avatar') }}
                            </span>
                        @endif
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-12 mb-3">
                            <label class="control-label my-2" for="name">Nama Lengkap<span class="text-danger">
                                    *</span></label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $data->name) }}">
                            <div class="text-danger err name"></div>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-12 mb-3">
                            <label class="control-label my-2" for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                value="{{ old('username', $data->username) }}">
                            <div class="text-danger err name"></div>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-12 mb-3">
                            <label for="email" class="control-label my-2">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ auth()->user()->email }}" readonly="disable">
                            <div class="text-danger err email"></div>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-12">
                            <label for="bio" class="control-label my-2">Bio</label>
                            <textarea name="bio" id="bio" class="form-control" rows="3">{{ old('bio', $data->bio) }}</textarea>
                            <div class="text-danger err bio"></div>

                        </div>
                    </div>

                    <div class="mt-5 text-right">
                        <input type="submit" class="btn btn-primary px-3" value="Simpan Perubahan">
                    </div>

                </form>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection
