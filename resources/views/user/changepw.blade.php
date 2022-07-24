@extends('layouts.main')
@include('partials.navbar')
@section('container')

<link rel="stylesheet" href="css/dashboard.style.css">
<div class="container pt-3">
    <div class="row my-3">
        <div class="col-md-3 pr-0 d-none d-md-block">
            <!-- left card -->
            <div class="nav flex-column nav-pills settings-nav" aria-orientation="vertical">
                <h5 class="settings-nav__title mt-sm-4 ml-sm-4 mt-md-0 ml-md-0">
                    Pengaturan
                </h5>
                <a class="menu-setting-item" href="/settings">
                    Profil
                </a>

                <a class="menu-setting-item " href="#">
                    Project
                </a>

                <a class="menu-setting-item menu-setting-item--active" href="/changepw">
                    Ubah Password
                </a>
            </div>
        </div>
        <!-- right card -->
        <div class="col-md-9 pl-md-0">
            <form>
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
    </div>
</div>
    

@endsection