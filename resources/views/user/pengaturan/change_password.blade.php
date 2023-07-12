@extends('layouts.main')
@include('partials.navbar')

@section('container')

@include('dashboard.layouts.account.settings.password')
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="{{ asset('css/settings.css') }}" rel="stylesheet">
@endpush

