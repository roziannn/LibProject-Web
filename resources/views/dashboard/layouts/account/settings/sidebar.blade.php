<div class="col-lg-3">
    <button class="btn btn-secondary sidebar-profile-settings-btn d-lg-none" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#sidebar-profile-settings" aria-controls="offcanvasResponsive"><i
            class="bi bi-gear-fill"></i></button>

    <div class="card profile-settings d-none d-lg-flex">
        <div class="header-title mb-3">
            <strong class="fs-5">Pengaturan Akun</strong>
        </div>
        <a href="/account/profile" class="profile-settings-item">Data Akun</a>
        <a href="/account/change-password" class="profile-settings-item">Ubah Kata Sandi</a>
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
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Switch account</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Settings</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
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

    .profile-settings{
        padding: 20px;
    }

    .profile-settings-item{
        text-decoration: none;
        padding-bottom: 10px;
        color: #111111;
     
    }
    @media (max-width: 997px) {
        .sidebar-profile-settings-btn {
            display: block;
        }
    }
</style>
