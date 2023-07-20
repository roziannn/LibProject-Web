@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <link rel="stylesheet" href="css/home.style.css">
    <div class="text-head text-center mb-5">
        <h2 class="text-center" style="font-weight: 500;">Ikuti Workshop bersama LibPro!</h2>
        <p> Beragam workshop seru dan menarik untuk asah keterampilan kamu </p>
    </div>

    <div class="container">
        @foreach ($datas as $data)
            <div class="col-12 col-md-3 mb-3">
                <div class="card white-bg shadow mb-3">
                    <div class="card-header">
                        <div>
                            <span class="badge text-bg-success">{{ $data->workshop_type }}</span>
                            <small>{{ \Carbon\Carbon::parse($data->start_date)->isoFormat('dddd, D MMMM YYYY') }}</small>
                        </div>
                    </div>
                    <img src="{{ asset('storage/' . $data->workshop_img) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title">{{ $data->workshop_name }}</h5>
                        </a>
                        <small class="card-text text-muted my-3">{!! $data->desc !!}</small>


                    </div>
                </div>
        @endforeach
    </div>


    @include('partials.footer')
@endsection
<script src="https://kit.fontawesome.com/870589c011.js" crossorigin="anonymous"></script>

<style>
    .card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 36px;
    }

    .badge {
        margin: 8;
    }

    .card-title {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .card-text{
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
