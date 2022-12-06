<div class="container ">
    <div class="row my-5">
        <div class="col-md-3 pr-0 d-none d-md-block">
            <div class="card">
                <div class="nav flex-column nav-pills settings-nav" aria-orientation="vertical">
                    <h3 class="settings-nav__title mt-sm-4 ml-sm-4 mt-md-0 ml-md-0">
                        Pengaturan
                        <button class="btn float-right d-md-none" data-dismiss="offcanvas"
                            data-target="#mobile-settings-nav">
                            <i class="fa fa-times"></i>
                        </button>
                    </h3>
                    <a class="menu-setting-item menu-setting-item--active"
                        href="https://www.dicoding.com/settings/profile">
                        <i class="icon-profile setting-icon"></i>
                        Profil
                    </a>

                    <a class="menu-setting-item " href="https://www.dicoding.com/settings/personal">
                        <i class="icon-private-data setting-icon"></i>
                        Data Pribadi
                    </a>

                    <a class="menu-setting-item " href="https://www.dicoding.com/settings/account">
                        <i class="icon-account setting-icon"></i>
                        Akun
                    </a>

                    <a class="menu-setting-item " href="https://www.dicoding.com/settings/academy">
                        <i class="icon-academy setting-icon"></i>
                        Academy
                    </a>

                    <a class="menu-setting-item " href="https://www.dicoding.com/settings/email-subscription">
                        <i class="icon-email-subscription setting-icon"></i>
                        Email Langganan
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-9 pl-md-0">
            <div class="card user-settings__wrapper">
                <div class="user-settings__title">
                    <h4>Profile Account</h4>
                </div>
                <form action="{{ route('account.update') }}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="control-label" for="name">Nama Lengkap<span
                                    class="text-danger"> *</span></label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $data->name) }}">
                            <div class="text-danger err name"></div>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label class="control-label" for="username">Username</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $data->username) }}">
                            <div class="text-danger err name"></div>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-9">
                            <label for="bio" class="control-label">Bio</label>

                            <textarea name="bio" id="bio" class="form-control" rows="3">{{ old('name', $data->bio) }}</textarea>
                            <div class="text-danger err bio"></div>

                        </div>
                    </div>
                    <div class="form-group form-row">
                        <div class="col-sm-9">
                        <label for="email" class="control-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="{{ auth()->user()->email }}" readonly="disable">
                            <div class="text-danger err email"></div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="text-left">
                            <input type="submit" class="btn btn-primary px-3" value="Simpan Perubahan">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .user-settings__wrapper {
        padding: 2rem;
        background: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 8px;

    }

    .user-settings__title {
        margin-bottom: 1rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid #e5e5e5;
        font-size: 1.25rem !important;
        font-weight: 500 !important;
    }

    .control-label {
        font-weight: 600;
    }

    label {
        display: inline-block;
        margin-bottom: 0.5rem;
    }

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }



    .user-settings__wrapper .form-group {
        margin-bottom: 1.5rem;
    }
    
</style>
