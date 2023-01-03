@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-12">
                <div class="card-body">
                    <div class="card-header">
                        <h3>Notifikasi</h3>
                        <hr>
                    </div>
                    @foreach ($notifs as $notif)
                        <a class="link-post" href="/posts/{{ $notif->post->slug }}">
                            <div class="box-message">
                                {{ $notif->message }}
                                <br><span class="message-time">{{ $notif->created_at->diffForhumans() }}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .link-post {
        text-decoration: none;
        color: #333;
    }


    .box-message {
        margin: 10px 0px 10px 0px;
        background: #f8f8f8;
        padding: 15px;
        border-radius: 8px;
        color: #333;
        font-weight: 600;
    }

    .message-time {
        font-size: 13px;
        font-weight: 400;
    }
</style>
