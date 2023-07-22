@extends('layouts.main')
@include('partials.navbar')

@section('container')

@include('dashboard.layouts.account.settings.sidebar')

<div class="col-md-9 pl-md-0">
    <form action="{{ route('account.update') }}">
        <div class="card user-settings__wrapper">
            <h4 class="user-settings__title">Ubah Password</h4>
            <div class="form-group">
                <div class="alert alert-warning font-weight-medium small">
                    Isi jika Anda ingin mengubah password.
                </div>
            </div>

            <div class="form-group form row">
                <div class="col-md-9">
                    <label class="control-label font-weight-bold" for="new-password">Password Baru 
                        <span class="text-danger">*</span>
                    </label>
                    <input id="new-password" class="col-md-6 form-control font-weight-medium" placeholder="Masukkan password baru" autocomplete="off" required="" minlength="8" data-parsley-required-message="Password tidak boleh kosong" data-parsley-minlength-message="Password minimal terdiri dari 8 karakter" data-target="passwordUpdate.newPassword" name="new_password" type="password" value="">
                </div>
            </div>
            <div class="form-group form row">
                <div class="col-md-9">
                    <label class="control-label font-weight-bold" for="new-password">Konfirmasi Password Baru
                        <span class="text-danger">*</span>
                    </label>
                    <input id="new-password" class="col-md-6 form-control font-weight-medium" placeholder="Konfrimasi Password" autocomplete="off" required="" minlength="8" data-parsley-required-message="Password tidak boleh kosong" data-parsley-minlength-message="Password minimal terdiri dari 8 karakter" data-target="passwordUpdate.newPassword" name="new_password" type="password" value="">
                </div>
            </div>
            <button type="submit" class="savebtn btn btn-primary px-3 font-weight-bold" data-label="Kirim Permintaan" style="margin-top:12px ;">Simpan Password</button>
        </div>
    </form>
</div>   
@endsection


