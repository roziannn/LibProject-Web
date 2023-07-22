@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <div class="row">
        @include('dashboard.layouts.account.settings.sidebar')
        <div class="col-lg-9">
            <div class="card profile-content p-4">
                <strong class="fs-5 border-bottom">Ubah Kata Sandi</strong>
                <form action="{{ route('account.password.update') }}">
                    @method('patch')
                    @csrf
                    <div class="form-group form row">
                        <div class="col-lg-12 my-3">
                            <label for="new-password">Kata Sandi Baru<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="password" name="new-password" class="form-control" id="new-password" required
                                    placeholder="Enter Password">
                                <span class="input-group-text new-password">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form row">
                        <div class="col-lg-12">
                            <label for="confirm-new-password">Konfirmasi Kata Sandi Baru<span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="password" name="confirm-new-password" class="form-control"
                                    id="confirm-new-password" required placeholder="Enter Password">
                                <span class="input-group-text confirm-new-password">
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

        document.querySelector('.new-password').addEventListener('click', function(event) {
            event.preventDefault();
            var passwordInput = document.getElementById('new-password');
            togglePasswordVisibility(passwordInput, this.querySelector('i'));
        });

        document.querySelector('.confirm-new-password').addEventListener('click', function(event) {
            event.preventDefault();
            var passwordInput = document.getElementById('confirm-new-password');
            togglePasswordVisibility(passwordInput, this.querySelector('i'));
        });
    });
</script>
