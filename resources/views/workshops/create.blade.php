@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <!-- CSS Bootstrap Datepicker -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- Javascript Bootstrap Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>

    <div class="row">
        <div class="col-md-4 order-md-1 mb-4">
            <form method="post" action="/dashboard/workshop/store" class="mb-5" enctype="multipart/form-data">
                @csrf
                <h4 class="mb-3">Tambah Workshop Baru</h4>
                <div class="mb-5">
                    <label for="workshop_img" class="form-label">Workshop Image</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control @error('workshop_img') is-invalid @enderror" type="file" id="workshop_img"
                        name="workshop_img" onchange="previewImage()">
                    @error('workshop_img')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
             </div>

        <div class="col-md-8 order-md-1 mt-3">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="token">Token/Queue</label>
                    <input type="text" class="form-control" id="token" name="token">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="workshop_type">Tipe Kegiatan</label>
                    <select class="form-select" id="workshop_type" name="workshop_type">
                        <option value="offline" selected>Offline/In-Class</option>
                        <option value="online">Online/Webinar</option>
                        <option value="hybrid">Hybrid</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="workshop_name">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="workshop_name" name="workshop_name" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="workshop_fee" class="form-label">Fee</label>
                    <select class="form-select" id="workshop_fee" name="workshop_fee">
                        <option value="Gratis" selected>Gratis</option>
                        <option value="Berbayar">Berbayar</option>
                    </select>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="text" class="datepicker form-control" id="start_date" name="start_date">
                </div>

                <div class="col-md-3 mb-3">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="text" class="datepicker form-control" id="end_date" name="end_date" required="">
                </div>

                <script type="text/javascript">
                    $('.datepicker').datepicker();
                </script>

                <div class="col-md-12 mb-3">
                    <label class="form-label">Deskripsi Kegiatan</label>
                    @error('desc')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="desc" type="hidden" name="desc" value="{{ old('desc') }}">
                    <trix-editor id="desc" input="desc"></trix-editor>
                </div>

                <div class="col-md-3">
                    <label for="member_join" class="form-label">Kuota Partisipan</label>
                    <div class="input-group mb-3">
                        <input type="text" id="member_join" name="member_join" class="form-control"
                            placeholder="Isi dengan angka">
                        <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                    </div>
                </div>
                <div class="col-md-3 mb-3" hidden>
                    <label for="workshop_status" class="form-label">Status Kegiatan</label>
                    <input type="text" id="workshop_status" name="workshop_status" class="form-control" value="true"
                        readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="slug" class="form-label">Default Link</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                        name="slug" required value="{{ old('slug') }}">
                </div>
            </div>
            <div class="item-button mt-3">
                <button type="submit" class="btn btn-primary">Buat Workshop</button>

                <a href="/dashboard/workshop" id="cancel" name="cancel" class="btn btn-secondary"
                    style="margin-left:6px;">Cancel</a>
            </div>
            </form>
        </div>
    </div>


    <script>
        //ambil isi field
        const workshop_name = document.querySelector('#workshop_name');
        const slug = document.querySelector('#slug');

        workshop_name.addEventListener('change', function() {
            fetch('/dashboard/workshop/checkSlug?workshop_name=' + workshop_name.value)
                //mengubah dari input name  value jd sebuah slug otomatiss
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-fie-accept', function(e) {
            e.preventDefault();
        });

        //preview img sblm upload
        function previewImage() {
            const image = document.querySelector('#workshop_img');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
            const blob = URL.createObjectURL(image.files[0]);
            imgPreview.src = blob;
        }
    </script>
@endsection
