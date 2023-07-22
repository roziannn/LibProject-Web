@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <div class="row mb-5">
        <div class="col-lg-12">
            <div class="btn-back pb-3 col-lg-9">
                <a href="/workshop"class="text-decoration-none"> <i class="bi bi-arrow-left"></i></a>
            </div>
            <div class="content-workshop-info d-flex align-items-start justify-content-between mb-3 ">
                <div class="col-lg-9">
                    <div class="content-workshop-detail">
                        <h4>{{ $workshop->workshop_name }}</h4>
                        <p>
                            {!! $workshop->desc !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="content-workshop-additional-info">
                        <div class="content-workshop-img">
                            <img src="{{ asset('storage/' . $workshop->workshop_img) }}" alt="" class="img-fluid"
                                width="300" height="250">
                        </div>
                        <div class="text-additional-info">
                            <div class="row">
                                <strong class="text-title-detail mt-3">Detail Kegiatan</strong>
                                <div class="mt-1">
                                    <span class="text-desc">Tanggal : {{ \Carbon\Carbon::parse($workshop->start_date)->isoFormat('D MMMM YYYY') }}</span>
                                </div>
                                <div class="mt-1">
                                    <span class="text-desc">Platform : {{ $workshop->workshop_type }}</span>
                                </div>
                                <div class="mt-1">
                                    <span class="text-desc">Participan : {{ $workshop->member_join }}</span>
                                </div>
                                <div class="my-5">
                                    <button class="btn btn-primary w-100 shadow"> Daftar {{ $workshop->workshop_fee }} </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
@endsection

<style>
    .col-lg-9 {
        padding: 0 100px;
    }

    .content-workshop-detail {
        flex: 1;
    }

    .text-title-detail {
        font-size: 20px;
    }

    
    @media (max-width: 998px) {
        .col-lg-9 {
            padding: 0 !important;
        }

        .content-workshop-info {
            flex-direction: column-reverse;

        }

        .img-fluid {
            margin: 15px;
        }


    }
</style>
