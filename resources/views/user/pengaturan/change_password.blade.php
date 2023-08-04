@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <div class="row">
        @include('dashboard.layouts.account.settings.sidebar')
        <div class="col-lg-9">
            <div class="card profile-content p-4">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <strong class="fs-5 border-bottom">Ubah Kata Sandi</strong>
                <form method="POST" action="{{ route('account.password.update') }}">
                    @method('patch')
                    @csrf
                    <div class="form-group form row">
                        <div class="col-lg-12 mt-3">
                            <label for="current_password">Kata Sandi Lama<span class="text-danger">*</span></label>

                            <input type="password" name="current_password"
                                class="form-control @error('password') is-invalid @enderror" id="current_password" required
                                placeholder="Enter Password">
                            @error('current_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group form row">
                        <div class="col-lg-12 my-3">
                            <label for="new-password">Kata Sandi Baru<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" id="new-password" required
                                    placeholder="Enter New Password">
                                <span class="input-group-text new-password">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form row">
                        <div class="col-lg-12">
                            <label for="password-confirm">Konfirmasi Kata Sandi Baru<span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="password-confirm" required placeholder="Enter Password">
                                <span class="input-group-text password-confirm">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </div>
                        <div class="mt-5 text-right">
                            <input type="submit" class="btn btn-primary px-3" value="Simpan Perubahan">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        function togglePasswordVisibility(passwordInput, eyeIcon) {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
                eyeIcon.setAttribute('title', 'Sembunyikan');
                eyeIcon.parentNode.setAttribute('aria-label', 'Sembunyikan');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
                eyeIcon.setAttribute('title', 'Lihat');
                eyeIcon.parentNode.setAttribute('aria-label', 'Lihat');
            }
        }

        document.querySelector('.new-password i').addEventListener('click', function(event) {
            event.preventDefault();
            var passwordInput = document.querySelector('#new-password');
            togglePasswordVisibility(passwordInput, this);
        });

        document.querySelector('.password-confirm i').addEventListener('click', function(event) {
            event.preventDefault();
            var passwordInput = document.querySelector('#password-confirm');
            togglePasswordVisibility(passwordInput, this);
        });
    });
</script>
