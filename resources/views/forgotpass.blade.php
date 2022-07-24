@extends('layouts.main')
@include('partials.navbar')
@section('container')

<div class="forgot-pass col-md-6 offset-md-3 white-bg pad-4">
    <h1>Lupa Password</h1>
</div>
<div class="box-forgot-pass col-md-6 offset-md-3 white-bg pad-4">
        <form action="">
            <div class="form-group">
                <label class="control-label" for="InputEmail">Email address</label>
                <input type="email" class="form-control" id="InputEmail"  placeholder="Enter email">
                <button type="submit" class="btn btn-primary px-3 font-weight-bold" data-label="Kirim Permintaan" style="margin-top:12px ;">Kirim Permintaan</button>
            </div>
        </form>
    </div>

<style>
    h1{
        margin-top: 40px;
        font-size: 24px;
        font-weight: 600;
    }
    #inputEmail{
        width: 472px;
        margin-top: 10px;
    }
    .forgot-pass{
        margin-top: 60px;
    }
    .box-forgot-pass{
        margin-top: 30px;
        background-color: #fafafa;
        width: 512px;
        padding: 20px;
        box-sizing: border-box;
        border-radius: 12px;
    }

</style>
@endsection



