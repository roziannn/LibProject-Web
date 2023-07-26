@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <link rel="stylesheet" href="css/home.style.css">
    <div class="text-head text-center mb-5">
        <strong class="text-center fs-2">Ikuti Rangkaian Event Seru!</strong>
        <p> Beragam workshop menarik untuk asah keterampilan kamu bersama developer lainnya </p>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($datas as $data)
                <div class="col-12 col-md-3 mb-3">
                    <div class="card white-bg shadow mb-3">
                        <img src="{{ asset('storage/' . $data->workshop_img) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="workshop/{{ $data->slug }}" class="card-title-name">
                                <span class="card-title fs-5 text-dark">{{ $data->workshop_name }}</span>
                            </a>
                            <div class="d-flex justify-content-between">
                                <small>{{ \Carbon\Carbon::parse($data->start_date)->isoFormat('dddd, D MMMM YYYY') }}</small>
                                <strong class="text-tag rounded bg-warning">{{ $data->workshop_type }}</strong>
                            </div>
                            <small class="card-text text-muted my-3">{!! $data->desc !!}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
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

    .text-tag {
        font-size: 13px;
        color: #fff;
        /* margin-left: 25px; */
        padding-inline: 5px;
        /* background-color: rgb(229, 233, 237); */
        /* border: 1px solid #aaa; */
    }

    .card-title {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .card-title-name {
        text-decoration: none;
    }

    .card-text {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
