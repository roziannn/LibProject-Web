@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <div class="text-head mb-2">
        <h2 class="text-header" style="font-weight: 500;">Dashboard Event dan Workshop</h2>
        <p> Pengaturan jadwal kegiatan event dan workshop </p>
    </div>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h5 class="title-page mt-3 mb-1">Sedang Berjalan</h5>
        <a href="/dashboard/workshop/create" class="btn btn-primary">Create new project</a>
    </div>
 


    
    <div class="text-head mb-5">
        <h2 class="text-header" style="font-weight: 500;">Arsip Kegiatan</h2>
    </div>
@endsection
