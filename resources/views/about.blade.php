@extends('layouts.main')
@include('partials.navbar')
@section ('container')

<div class="text-head mt-5 mb-5">
<h1>LibChallenge</h1>
  <p> Ikuti challenge bulanan untuk mengasah keterampilan ngoding kamu </p>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-4 col-12">
      <div class="card mb-5">
        <p class="card-header" style="background: #26b175; color:white;"> <i class="fa-regular fa-calendar"></i>  01 Juni - 25 Juni</p>
        <div class="card-body">
          <h5 class="card-title">UI Design Finance App</h5>
          <p class="card-text">Tantangan membuat UI untuk aplikasi keuangan.</p>
          <div class="detail-challenge d-flex justify-content-between"> 
            <p><i class="fa-solid fa-user"></i> 19/20</p>
            <a href="#" class="btn btn-primary">+ Join Challenge</a>
          </div>
        </div>
      </div>
    </div>

      <div class="col-md-12 col-lg-4 col-12">
        <div class="card mb-5">
          <p class="card-header" style="background: #26b175; color:white;">27 Mei - 1 Juni</p>
          <div class="card-body">
            <h5 class="card-title">Web Project - Landing Page Book Store</h5>
            <p class="card-text">Bootstrap landing page website jual beli buku.</p>
            <div class="detail-challenge d-flex justify-content-between"> 
              <p><i class="fa-solid fa-user"></i> 19/20</p>
              <a href="#" class="btn btn-primary">+ Join Challenge</a>
            </div>
          </div>
        </div>
      </div>


      <div class="text-head">
        <h5 class="mb-3 mt-5">Challenge Selesai</h5>
      </div>

      <div class="col-md-12 col-lg-4 col-12">
        <div class="card mb-5">
          <p class="card-header" style="background: lightgray; color:white;">01 Juni - 25 Juni</p>
          <div class="card-body bg-light">
            <h5 class="card-title">UI Design Finance App</h5>
            <p class="card-text">Tantangan membuat UI untuk aplikasi keuangan.</p>
            <div class="detail-challenge d-flex justify-content-between"> 
              <p><i class="fa-solid fa-user"></i> 19/20</p>
              <button type="button" class="btn btn-secondary" disabled>+ Join Challenge</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 col-lg-4 col-12">
        <div class="card mb-5">
          <p class="card-header" style="background: lightgray; color:white;">01 Juni - 25 Juni</p>
          <div class="card-body bg-light">
            <h5 class="card-title">UI Design Finance App</h5>
            <p class="card-text">Tantangan membuat UI untuk aplikasi keuangan.</p>
            <div class="detail-challenge d-flex justify-content-between"> 
              <p><i class="fa-solid fa-user"></i> 19/20</p>
              <button type="button" class="btn btn-secondary" disabled>+ Join Challenge</button>
            </div>
          </div>
        </div>
      </div>


      
  </div>
</div>
@endsection

<script src="https://kit.fontawesome.com/870589c011.js" crossorigin="anonymous"></script>