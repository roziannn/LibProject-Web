@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <link rel="stylesheet" href="css/home.style.css">

    <div class="text-center d-flex flex-column align-items-center">
        <div class="header-title">
            <h1>Perdalam Kemampuan Desain dan Code
                <br class="d-none d-md-block"> Bersama Developer Lainnya
            </h1>
        </div>
    </div>
    @include('partials.menu')



    <section class="featured pt-50 pb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="row col-lg-6 d-none d-sm-block justify-content-center">
                    <img src="img/img1.png" style="width:560px;" alt="">
                </div>

                <div class="text-left col-lg-6 col-12">
                    <div class="mb-20">
                        <div class="front-text-group">
                            <h5 class="text-support text-green  mt-3">#ProduktifOtodidak</h5>
                            <h2 class="header-primary mb-0">Lorem ipsum dolor, sit amet <br> Lorem ipsum dolor sit amet.
                            </h2>
                            <p class="text-support text-green mt-2">Lorem ipsum, dolor sit amet consectetur <br>
                                adipisicing elit. Excepturi recusandae minima iste, blanditiis, assumenda cupiditate<br> rem
                                harum nam repellat adipisci inventore neque accusantium possimus quaerat.</p>
                            <a href="/posts" class="btn btn-primary">Cari Project Sekarang</a>
                        </div>
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
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
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
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <a href="https://roadmap.sh/backend" target="_blank" class="btn btn-primary stretched-link"> >
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
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
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
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <a href="https://roadmap.sh/android" target="_blank" class="btn btn-primary stretched-link"> >
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


    <section class="featured pt-50 pb-30">
        <div class="container-fluid">
            <div class="row data-stats">
                <div class="col-lg-8 offset-lg-2">
                    <div class="row gy-5 justify-content-center">
                        <div class="text-center col-6 col-md-4">
                            <h3 class="text-green">696,607</h3>
                            <p>Member Join</p>
                        </div>
                        <div class="text-center col-6 col-md-4">
                            <h3 class="text-green">1000+</h3>
                            <p>Project Available</p>
                        </div>
                        <div class="text-center col-6 col-md-4">
                            <h3 class="text-green">36,707</h3>
                            <p>Final Case</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer-nd">
        <div class="container-fluid">
            <div class="row">
                <div class="item-footer col-lg-3 col-10">
                    <img src="img/logo.png" style="margin-left:-10px;" width="320" height="100" alt="logo">
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
    </style>
@endsection
