<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-brand mx-auto">
            <a href="/">
                <img src="{{ asset('/img/logo.png') }}" class="img">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/posts">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">Challenge</a>
                </li>
            </ul>
        </div>


        <div class="navbar ms-auto">
            @auth
                <div class="nav-item-right">
                    <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="username-name text-light"> Halo, {{ auth()->user()->username }}</span>
                        <?php
                        $avatar_url = auth()->user()->avatar ? asset('img/avatar/' . auth()->user()->avatar) : 'https://ui-avatars.com/api/?size=128&background=random&name=' . auth()->user()->username;
                        ?>
                        <img src="{{ $avatar_url }}" class="rounded-circle ml-2 m-1" alt="" width="32"
                            height="32">
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/account/profile"><i class="fa-solid fa-gear"></i> Pengaturan</a>
                        </li>
                        <li><a class="dropdown-item" href="/dashboard/posts"><i class="fa-solid fa-sheet-plastic"></i> My
                                Project</a>
                        </li>
                        <li><a class="dropdown-item" href="/dashboard/admin"><i class="fa-solid fa-sheet-plastic"></i>
                                Dashboard
                                Admin</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form class="mb-0" action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i
                                        class="fa-solid fa-arrow-right-from-bracket "></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="nav-item-right">
                    <a class="nav-link" href="/notification">
                        <i class="btn-lg bi bi-bell text-light"></i>
                        <span class="badge rounded-pill badge-notification bg-danger" id="notify-count"></span>
                        <script>
                            fetch('/notification/count')
                                .then(response => response.json())
                                .then(data => {
                                    const notifyCount = parseInt(data.total);
                                    if (notifyCount > 0) {
                                        document.getElementById('notify-count').innerText = notifyCount;
                                    } else {
                                        document.getElementById('notify-count').style.display = 'none';
                                    }
                                })
                                .catch(err => {
                                    console.log(err);
                                });
                        </script>
                    </a>
                </div>
            @else
                <div class="nav-item">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#loginModal">Login</button>
                </div>
            @endauth
        </div>
    </div>
</nav>


<div class="modal" id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="model-title mb-0">Login Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert" style="width:100% ;">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/login" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" required placeholder="Enter email" autofocus required
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control" id="password" required
                                placeholder="Enter Password" required>
                            <span class="input-group-text">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                        <p class="mt-2 mb-4"><a href="/forgotpass"
                                style="font-size: 13px; text-decoration:none;">Lupa
                                Password?</a></p>
                    </div>
                    <div class="text-right justify-content-around mt-3">
                        <button type="submit" class="btn btn-primary">Masuk</a></button>
                    </div>
                    <p>Belum punya akun? Daftar akun <a href="/register">disini</a></p>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelector('.input-group-text').addEventListener('click', function(event) {
        event.preventDefault();
        var passwordInput = document.getElementById('password');
        var eyeIcon = this.querySelector('i');

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
    });
</script>

<style>
    .text-right {
        text-align: right !important;
    }


    .img {
        width: 140px;
    }

    .nav-item a {
        margin-right: 20px;
    }

    .bi-bell i {
        width: 100px;
        text-align: center;
        vertical-align: middle;
        position: relative;
        font-size: 5px;
    }
    
    .badge {
        background: rgba(0, 0, 0, 0.5);
        width: auto;
        height: auto;
        margin: 0;
        border-radius: 50%;
        position: absolute;
        top: 0px;
        right: -2px;
        padding: 1px;
    }

    @media (max-width: 768px) {
        .username-name {
            display: none;
        }
    }
</style>
