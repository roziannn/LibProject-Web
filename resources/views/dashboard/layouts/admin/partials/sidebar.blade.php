<div class="col-lg-3">
    <button class="btn btn-secondary sidebar-profile-settings-btn d-lg-none" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#sidebar-profile-settings" aria-controls="offcanvasResponsive"><i
            class="bi bi-gear-fill"></i></button>

    <div class="card profile-settings d-none d-lg-flex">
        <div class="header-title">
            <strong class="fs-5">Pengaturan Admin</strong>
        </div>
        <a href="/dashboard/admin/user" class="profile-settings-item my-3">Data User</a>
        <a href="/dashboard/admin/category" class="profile-settings-item mb-3">Data Kategori</a>
        <a href="/dashboard/workshop" class="profile-settings-item mb-3">Data Workshop</a>
    </div>

    <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="sidebar-profile-settings"
        aria-labelledby="offcanvasResponsiveLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">Pengaturan Admin</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                data-bs-target="#sidebar-profile-settings" aria-label="Close"></button>
        </div>
        <div class="d-lg-none sidebar-offcanvas sidebar-offcanvas-profile-settings">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a class="profile-settings-item m-2" aria-current="page" href="/dashboard/admin/user">Data User</a>
                <a class="profile-settings-item m-2" aria-current="page" href="/dashboard/admin/category">Data Kategori</a>
                <a class="profile-settings-item m-2" aria-current="page" href="/dashboard/workshop">Data Workshop</a>
                {{-- <li class="nav-item">
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
                </li> --}}
            </ul>
        </div>
    </div>
</div>

<script>
    // menu link active
    document.addEventListener("DOMContentLoaded", function() {
        var url = window.location.pathname;


        var links = document.querySelectorAll('.profile-settings-item');

        links.forEach(function(link) {
            var href = link.getAttribute('href');
            if (url === href) {
                link.classList.add('active');
            }
        });
    });
</script>

<style>
    .profile-settings-item.active {
        background-color: rgb(229, 233, 237);
        border-radius: 5px;
        color: #1b1b1b;
        padding: 8px;
    }

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
        padding-left: 8px;
        color: #111111;
    }
/*     
    .bi {
        padding-right: 10px;
    } */


    @media (max-width: 997px) {
        .sidebar-profile-settings-btn {
            display: block;
        }
    }
</style>
