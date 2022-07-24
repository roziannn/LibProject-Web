@extends('layouts.main')
@include('partials.navbar')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
<h3 class="title-page mb-1">My Profile</h3>
</div>
@include('dashboard.layouts.profile')
@endsection