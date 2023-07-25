<div class="col-lg-3">
    <button class="btn btn-secondary sidebar-profile-settings-btn d-lg-none" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#sidebar-profile-settings" aria-controls="offcanvasResponsive"><i
            class="bi bi-gear-fill"></i></button>

    <div class="card profile-settings d-none d-lg-flex">
        <div class="header-title mb-3 d-flex flex-column align-items-start">
            <?php
            $avatar_url = auth()->user()->avatar ? asset('img/avatar/' . auth()->user()->avatar) : 'https://ui-avatars.com/api/?size=128&background=random&name=' . auth()->user()->username;
            ?>
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <img src="{{ $avatar_url }}" class="rounded-circle ml-2 " alt="" width="64" height="64">
                </div>
                <div class="col">
                    <strong class="fs-6">{{ auth()->user()->name }}</strong>
                    <small>{{ auth()->user()->email }}</small>
                </div>
            </div>
        </div>
        
        <a href="#" class="profile-settings-item">Proyek Saya</a>
        <a href="#" class="profile-settings-item">Event</a>
        <a href="#" class="profile-settings-item">Pengaturan</a>
    </div>

    <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="sidebar-profile-settings"
        aria-labelledby="offcanvasResponsiveLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">Pengaturan Akun</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                data-bs-target="#sidebar-profile-settings" aria-label="Close"></button>
        </div>
        <div class="d-lg-none sidebar-offcanvas sidebar-offcanvas-profile-settings">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <a class="profile-settings-item" aria-current="page" href="/account/profile">Data Akun</a>

                <a class="profile-settings-item" aria-current="page" href="#">Data Instansi</a>

                <a class="profile-settings-item" href="/account/change-password">Ubah Kata Sandi</a>
            </ul>
        </div>
    </div>
</div>

<style>
    .sidebar-profile-settings-btn {
        position: fixed;
        top: 80px;
        left: 0;
        z-index: 10;
        padding: 1rem;
    }

    .profile-settings {
        padding: 20px;
    }

    .profile-settings-item {
        text-decoration: none;
        padding-bottom: 16px;
        padding-left: 8px;
        color: #111111;
    }

    @media (max-width: 997px) {
        .sidebar-profile-settings-btn {
            display: block;
        }
    }
</style>
