@extends('layouts.main')
@include('partials.navbar')

@section('container')

@include('dashboard.layouts.account.settings.profile')
@endsection

@push('styles')
        
    <link href="{{ asset('css/settings.css') }}" rel="stylesheet">
@endpush