@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <div class="row my-5">
        <div class="col-md-6 offset-md-3 white-bg pad-4">
            <p>Lupa Password</p>
            <hr>
        </div>
        <div class="col-md-6 offset-md-3 white-bg pad-4">
            <form action="">
                <div class="form-group">
                    <label class="control-label" for="InputEmail">Email</label>
                    <input type="email" class="form-control" style="width: 100%;" id="InputEmail" placeholder="Enter email">
                    <div class="text-right mt-2">
                        <button type="submit" class="btn btn-primary px-3 font-weight-bold" data-label="Kirim Permintaan"
                            style="margin-top:12px ;">Kirim Permintaan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <style>
        p { 
            font-size: 24px;
        }

        #inputEmail {
            margin-top: 10px;
        }

        .form-control {
            width: 100%;
        }
    </style>
@endsection
