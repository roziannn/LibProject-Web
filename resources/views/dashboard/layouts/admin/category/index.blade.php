@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <div class="row">
        @include('dashboard.layouts.admin.partials.sidebar')
        <div class="col-md-9">
            <div class="card content p-4">
                @if (session()->has('successDelete'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        {{ session('successDelete') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true"></button>
                    </div>
                @endif
                <strong class="fs-5 border-bottom mb-2">Data Kategori Proyek</strong>

                <table class="table small">
                    <thead>
                        <tr>
                            <th>Nama Kategori</th>
                            <th class="text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td class="text-right">
                                    <a href="#" class="btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modal-danger{{ $item->id }}">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-right">
                    <a href="#" class="btn btn-primary btn-sm m-3 text-decoration-none"data-bs-toggle="modal"
                        data-bs-target="#modal"> Tambah Kategori
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- danger modal --}}
    @foreach ($data as $item)
        <div class="modal fade" id="modal-danger{{ $item->id }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/dashboard/admin/category/delete' . $item->id) }}" method="GET">
                            {{ csrf_field() }}
                            <p>Yakin ingin menghapus data?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light btn-sm pull-left" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <div class="modal fade" id="modal">
        <div class="modal-dialog modal-m">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kategori Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/dashboard/admin/category/store" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label class="small mb-1" for="name">Nama Kategori</label>
                                <input class="form-control" id="name" name="name" type="text"
                                    placeholder="Masukan Kategori" required autocomplete="off">
                            </div>
                            <div class="col-md-12">
                                <label class="small mt-3" for="slug">Kategori Slug</label>
                                <input class="form-control" id="slug" name="slug" type="text"
                                    placeholder="Masukan Kategori" required value="{{ old('slug') }}" autocomplete="off">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light btn-sm pull-left"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-sm">Save Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        //ambil isi field
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            fetch('/dashboard/admin/category/checkSlug?name=' + name.value)
                //mengubah dari input name  value jd sebuah slug otomatiss
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
@endsection
