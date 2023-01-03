@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="card-body text-center">
                <div class="card-header">
                    <h3>Notifikasi</h3>
                </div>
                @foreach ($notifs as $notif)
                    <li>
                        {{ $notif->message }}
                    </li>
                @endforeach
            </div>
        </div>
    </div>
@endsection
