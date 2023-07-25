<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <link rel="stylesheet" href="css/home.style.css">

    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width:100% ;">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session()->has('successRegister'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="width:100% ;">
            {{ session('successRegister') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container container-hero">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-5 text-highlight-homepage">
                <h1 class="mb-3 font-weight-500">
                    Perdalam Kemampuan <br> <strong>Desain</strong> dan <strong>Code</strong>
                <br class="d-none d-md-block"> Bersama Developer Lainnya
                </h1>
                <p class="mb-5">Setiap mahasiswa dapat mengemukakan <span class="text-underline">ide-ide baru</span>, menguji batasan
                    mereka dan tumbuh sebagai individu maupun tim. Melalui kolaborasi, proyek yang
                    dihasilkan dapat memberikan kontribusi dalam dunia nyata.</p>
                    <a href="/posts" class="btn btn-primary btn-lg shadow">Cari Project<i class="ms-3 bi bi-arrow-right-circle-fill"></i></a>
                    <a href="/posts" class="btn btn-warning btn-lg shadow mx-3"><i class="me-3 bi bi-play-circle-fill"></i>Introduction</a>
                    
            </div>
            <div class="col-5">
                <img src="img/sketch.png" class="img-responsive-home" width="100%"  alt="Gambar">
            </div>
        </div>
    </div>



    <section class="featured pt-50 pb-50">
        <div class="container-fluid">
            <div class="mb-3 row">
                <div class="text-left col-lg-12 col-12">
                    <div class="front-text-group">
                        <h5 class="text-support text-green">Start Making Project</h5>
                        <h2 class="header-primary mb-0">Help you with Roadmap</h2>
                        <p class="text-support text-green mt-2">Bingung mau mulai dari mana?</p>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card p-2 border-0">
                        <div class="card-body">
                            <h5 class="card-title"><span><i class="bi bi-code-slash"></i></span> Frontend</h5>
                            <p class="card-text text-justify">Kembangkan antarmuka pengguna untuk menciptakan pengalaman visual dan interaktif yang menarik.</p>
                            <a href="https://roadmap.sh/frontend" target="_blank" class="btn btn-sm btn-primary  stretched-link"> <i class="bi bi-arrow-right"></i> 
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-2 border-0">
                        <div class="card-body">
                            <h5 class="card-title"><span><i class="bi bi-database-fill-lock"></i></span> Backend</h5>
                            <p class="card-text text-justify">Menciptakan fungsionalitas kompleks dan kuat yang berada di balik layar antarmuka pengguna.</p>
                            <a href="https://roadmap.sh/backend" target="_blank" class="btn btn-sm btn-primary stretched-link">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-2  border-0">
                        <div class="card-body">
                            <h5 class="card-title"><span><i class="bi bi-android"></i></span> Android</h5>
                            <p class="card-text">Membangun aplikasi Android agar dapat diakses dan digunakan oleh pengguna secara luas.</p>
                            <a href="https://roadmap.sh/react" target="_blank" class="btn btn-sm btn-primary stretched-link"><i class="bi bi-arrow-right"></i> 
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-2 border-0">
                        <div class="card-body">
                            <h5 class="card-title"><span><i class="bi bi-apple"></i></span> iOS</h5>
                            <p class="card-text">Membangun aplikasi iOS ke App Store yang compact dan siap untuk digunakan oleh pengguna Apple.</p>
                            <a href="https://roadmap.sh/android" target="_blank" class="btn btn-sm btn-primary stretched-link">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="featured pt-50 pb-50">
        <div class="container-fluid">
            <div class="mb-3 row">
                <div class="text-left col-lg-12 col-12">
                    <div class="front-text-group">
                        <h5 class="text-support text-green">Our Purpose</h5>
                        <h2 class="header-primary mb-0">Platform Berkumpulnya <br> Calon Developer Indonesia</h2>
                        <p class="text-support text-green mt-2"></p>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card p-2 border-0">
                        <div class="card-body">
                            <h5 class="card-title">Improve Skills</h5>
                            <p class="card-text">Bangun project membantu perdalam keterampilan </p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-2 border-0">
                        <div class="card-body">
                            <h4 class="card-title">Real Case</h4>
                            <p class="card-text">Bangun real-world project di bidang teknologi informasi</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-2 border-0">
                        <div class="card-body">
                            <h4 class="card-title">Kolaborasi</h4>
                            <p class="card-text">Berkolaborasi dengan mahasiswa informatika lainnya</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-2 border-0">
                        <div class="card-body">
                            <h4 class="card-title">Portfolio</h4>
                            <p class="card-text">Miliki hasil karya dan bangun karir dengan portfolio</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    @include('partials.footer')

    <style>
     
        .card {
            background-color: #F6F8FD;
        }
        .text-underline {
            text-decoration: underline;
            text-decoration-color: blue;
        }

/* 
        @media (max-width: 678px) {
            .img-home {
                flex-direction: column;
                align-items: center;
            }

            .img-home img {
                width: 100%;
                margin-right: 0;
                margin-bottom: 20px;
            }

            .img-home .img-text-group {
                padding-left: 0;
                text-align: left;
            }
        }

        @media (min-width: 679px) {
            .img-home .img-text-group {
                margin: 10px;
            }
        } */
    </style>
@endsection
