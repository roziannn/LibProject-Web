@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <div class="container">
        <div class="row my-5">
            @include('dashboard.layouts.admin.sidemenu')
            <div class="col-md-9 pl-md-0">
                <div class="card user-settings__wrapper">
                    <div class="user-settings__title">
                        <h4>Data User</h4>
                        <hr>
                    </div>
                    {{-- <div class="col-md-12">
                        <div class="text-right">
                            <a href="/dashboard/posts/create" class="btn btn-primary btn-sm"></a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link href="{{ asset('css/settings.css') }}" rel="stylesheet">
@endpush
