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
                    <div class="content-workshop-img">
                        <img src="{{ asset('storage/' . $workshop->workshop_img) }}" alt="" class="img-fluid"
                            width="300" height="250">
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



    @media (max-width: 998px) {
        .col-lg-9 {
            padding: 0 !important;
        }

        .content-workshop-info {
            flex-direction:  column-reverse;
            
        }

        .img-fluid {
            margin: 15px;
        }

        
    }
</style>
