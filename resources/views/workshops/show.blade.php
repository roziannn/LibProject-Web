@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <div class="row mb-5">
        <div class="col-lg-12">
            <div class="content-workshop-info d-flex align-items-start justify-content-between">
                <div class="col-lg-9">
                    
                    <div class="content-workshop-detail border p-4 rounded">
                        <div class="border-bottom my-3">
                            <p class="fs-4">Deskripsi</p>
                        </div>
                        <h4>{{ $workshop->workshop_name }}</h4>
                        <p>
                            {!! $workshop->desc !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="content-workshop-additional-info">
                        <div class="content-workshop-img d-flex justify-content-center align-items-center">
                            <img src="{{ asset('storage/' . $workshop->workshop_img) }}" alt=""
                                class="img-fluid rounded" width="280" height="auto">
                        </div>
                        <div class="text-additional-info p-4">
                            <div class="row">
                                <p class="fs-4 mt-3">Detail Kegiatan</p>
                                <div>
                                    <span class="text-desc">Tanggal :
                                        {{ \Carbon\Carbon::parse($workshop->start_date)->isoFormat('D MMMM YYYY') }}</span>
                                </div>
                                <div class="mt-1">
                                    <span class="text-desc">Platform : {{ $workshop->workshop_type }}</span>
                                </div>
                                <div class="mt-1">
                                    <span class="text-desc">Participan : {{ $workshop->member_join }}</span>
                                </div>
                                <div class="my-4">
                                    <button class="btn btn-primary w-100 shadow"> Daftar {{ $workshop->workshop_fee }}
                                    </button>
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
        padding: 0 50px;
    }

    .content-workshop-detail {
        flex: 1;
    }

    @media (max-width: 998px) {
        .col-lg-9 {
            padding: 0 !important;
        }

        .content-workshop-info {
            flex-direction: column-reverse;

        }

        .img-fluid {
            width: 60%;
        }
    }
    @media (max-width: 762px) {
        .img-fluid {
            width: 100%;
        }   
    }
</style>
