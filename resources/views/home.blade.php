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

    <div class="text-center d-flex flex-column align-items-center">
        <div class="header-title">
            <h1>Perdalam Kemampuan Desain dan Code
                <br class="d-none d-md-block"> Bersama Developer Lainnya
            </h1>
        </div>
    </div>
    @include('partials.menu')

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-light">
        <div class="img-home d-flex align-items-center">
            <img src="img/reg.png" class="img-responsive-home" width="40%" alt="Gambar" style=" max-width: 100%;">
            <div class="img-text-group">
                <div class="container-fluid">
                    <div class="row data-stats">
                        <div class="col-lg-12">
                            <div class="row gy-5">
                                <div class="col-6 col-md-4">
                                    <h3 class="text-green">696,607</h3>
                                    <p class="text-dark">Member Join</p>
                                </div>
                                <div class="col-6 col-md-4">
                                    <h3 class="text-green">1000+</h3>
                                    <p class="text-dark">Project Available</p>
                                </div>
                                <div class="col-6 col-md-4">
                                    <h3 class="text-green">36,707</h3>
                                    <p class="text-dark">Final Case</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="text-support mt-3 text-black">Temukan keunggulan belajar otodidak dengan #produktif!</h5>
                <p class="text-support text-green mt-2 text-black"> Setiap mahasiswa dapat mengemukakan ide-ide baru, menguji batasan mereka, <br> dan tumbuh sebagai individu maupun tim. Melalui kolaborasi erat, proyek <br> yang dihasilkan dapat memberikan kontribusi dalam dunia nyata.</p>
                <a href="/posts" class="btn btn-primary">Cari Project Sekarang</a>
            </div>
        </div>
    </div>
    

    <section class="featured pt-50 pb-50">
        <div class="container-fluid">
            <div class="mb-3 row">
                <div class="text-left col-lg-12 col-12">
                    <div class="front-text-group">
                        <h5 class="text-support text-green">Start Develop</h5>
                        <h2 class="header-primary mb-0">Help you with Roadmap</h2>
                        <p class="text-support text-green mt-2">Bingung mau mulai dari mana?</p>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card p-2 border-0">
                        <div class="card-body">
                            <div class="icon-roadmap mt-3 mb-3">
                                <img src="/img/roadmap/frontend.png" style="width:50px;">
                            </div>
                            <h4 class="card-title">Frontend Developer</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="https://roadmap.sh/frontend" target="_blank" class="btn btn-primary stretched-link"> >
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-2 border-0">
                        <div class="card-body">
                            <div class="icon-roadmap mt-3 mb-3">
                                <img src="/img/roadmap/backend.png" style="width:35px;">
                            </div>
                            <h4 class="card-title">Backend Developer</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="https://roadmap.sh/backend" target="_blank" class="btn btn-primary stretched-link">
                                >
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-2  border-0">
                        <div class="card-body">
                            <div class="icon-roadmap mt-3 mb-3">
                                <img src="/img/roadmap/react.png" style="width:35px;">
                            </div>
                            <h4 class="card-title">React</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="https://roadmap.sh/react" target="_blank" class="btn btn-primary stretched-link"> >
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card p-2 border-0">
                        <div class="card-body">
                            <div class="icon-roadmap mt-3 mb-3">
                                <img src="/img/roadmap/android.png" style="width:30px;">
                            </div>
                            <h4 class="card-title">Android</h4>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                to
                                additional content. This content is a little bit longer.</p>
                            <a href="https://roadmap.sh/android" target="_blank" class="btn btn-primary stretched-link">
                                >
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
                        <h5 class="text-support text-green">Why Us</h5>
                        <h2 class="header-primary mb-0">Platform Berkumpulnya <br> Developer Indonesia</h2>
                        <p class="text-support text-green mt-2"></p>
                    </div>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card p-2 border-0">
                        <div class="card-body">
                            <h4 class="card-title">Improve Skills</h4>
                            <p class="card-text">Bangun project membantu perdalam skills </p>
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
                            <p class="card-text">Kolaborasikan keahlian mu bersama developer lainnya</p>
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

    <section class="footer-nd">
        <div class="container-fluid">
            <div class="row">
                <div class="item-footer col-lg-3 col-10">
                    <p class="mt-2 tagline">
                        Website untuk berkolaborasi membangun project bersama dan menghasilkan portfolio
                        untuk peluang karir.
                    </p>
                    <h6 class="mt-4">© 2022 LibProject</h6>
                </div>

                <div class="item-footer col-lg-1 col-12"></div>

                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="item-footer col-lg-3 col-12">
                            <h6 class="header-category">Project Category</h6>
                            <ul>
                                <li>
                                    <a href="#">UI/UX Designer</a>
                                </li>
                                <li>
                                    <a href="#">Web Developer</a>
                                </li>
                                <li>
                                    <a href="#">Android/iOS</a>
                                </li>
                                <li>
                                    <a href="#">UX Designer</a>
                                </li>
                            </ul>
                        </div>

                        <div class="item-footer col-lg-3 col-12">
                            <h6 class="header-category">Community</h6>
                            <ul>
                                <li>
                                    <a href="#">UI Kit</a>
                                </li>
                                <li>
                                    <a href="#">Assets</a>
                                </li>
                                <li>
                                    <a href="#">Mockup</a>
                                </li>
                            </ul>
                        </div>

                        <div class="item-footer col-lg-3 col-6">
                            <h6 class="header-category">Find Us</h6>
                            <ul>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li>
                                    <a href="#">YouTube</a>
                                </li>
                                <li>
                                    <a href="#">Instagram</a>
                                </li>
                            </ul>
                        </div>

                        <div class="item-footer col-lg-3 col-6">
                            <h6 class="header-category">Company</h6>
                            <ul>
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li>
                                    <a href="#">Events and Info</a>
                                </li>
                                <li>
                                    <a href="#">Challenge</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .card {
            background-color: #F6F8FD;
        }

        .img-home {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .img-home .img-responsive-home {
            max-width: 40%;
            /* margin-right: 20px; */
        }

        .img-home .img-text-group {
            flex-grow: 1;
            padding-left: 20px;
        }


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
        }
    </style>
@endsection
