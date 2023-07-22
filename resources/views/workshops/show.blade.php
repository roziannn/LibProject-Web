@extends('layouts.main')
@include('partials.navbar')
@section('container')

<div class="row mb-5">
    <div class="col-lg-12">
        <div class="content-info d-flex align-items-center justify-content-between mb-3 p-5">
            <div class="col-lg-6">
                <h4>{{ $workshop->workshop_name }}</h4>
                <p>
                    {!! $workshop->desc !!}
                </p>
            </div>
            <div class="col-lg-3">
                <img src="{{ asset('storage/' . $workshop->workshop_img) }}" alt=""
                class="img-fluid">
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
@endsection