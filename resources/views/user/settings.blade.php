@extends('layouts.main')
@include('partials.navbar')
@section('container')

<link rel="stylesheet" href="css/settings.style.css">
<div class="container pt-3">
    <div class="row my-3">
        <div class="col-md-3 pr-0 d-none d-md-block">
            <!-- left card -->
            <div class="nav flex-column nav-pills settings-nav" aria-orientation="vertical">
                <h5 class="settings-nav__title mt-sm-4 ml-sm-4 mt-md-0 ml-md-0">
                    Pengaturan
                </h5>
                <a class="menu-setting-item menu-setting-item--active" href="#">
                    Profil
                </a>

                <a class="menu-setting-item " href="#">
                    Project
                </a>

                <a class="menu-setting-item " href="/changepw">
                    Ubah Password
                </a>
            </div>
        </div>
        <!-- right card -->
        <div class="col-md-9 pl-md-0">
            <form>
                <div class="card user-settings__wrapper">
                    <h4 class="user-settings__title">Profile</h4>
                    <div class="form-group">
                        <label class="control-label" for="image">Foto Diri</label>
                        <div class="row">
                            <div class="col-md-2">
                                <img src="img/3.jpg" alt="roziannn14" class="img-fluid rounded" data-avatar-preview="">
                            </div>
                            <div class="col-md-10">
                                <label class="dcd-btn dcd-btn-primary px-3" style="background-color: #0E66E7;border-radius:4px;color:#fff;">
                                    Pilih Foto
                                    <input type="file" class="d-none" data-filename-placement="inside" accept="image/*" data-avatar-selector="">
                                </label>
                                <input type="hidden" name="avatar" data-avatar-input-field="">
                                <div class="small">Gambar Profile Anda sebaiknya memiliki rasio 1:1<br>
                                    dan berukuran tidak lebih dari 2MB.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="control-label" for="full-name">Nama Lengkap <span class="text-danger">*</span></label>
                            <input name="full_name" type="text" class="form-control" id="full-name" placeholder="Full Name">
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="control-label" for="email">Email</label>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Email Address">
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="control-label" for="telp">No. Telepon</label>
                            <input name="telp" type="text" class="form-control" id="telp" placeholder="Phone">
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="control-label" for="bio">Bio</label>
                            <textarea name="bio" type="text" class="form-control" id="bio" placeholder="" rows="5"></textarea> 
                        </div>
                    </div>
                    <button type="submit" class="savebtn btn btn-primary px-3 font-weight-bold" data-label="Kirim Permintaan" style="margin-top:12px ;">Simpan Perubahan</button>
                </div>
            </form>
        </div>
        
    </div>
</div>

    
@endsection