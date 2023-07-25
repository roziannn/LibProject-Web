@extends('layouts.main')
@include('partials.navbar')
@section('container')
    <div class="row">
        @include('dashboard.layouts.admin.partials.sidebar')
        <div class="col-md-9">
            <div class="card content p-4">
                <strong class="fs-5 border-bottom"> Pengaturan Jadwal Event dan Workshop</strong>

                <div class="col-lg-12">
                    <table class="table small">
                        <thead>
                            <tr>
                                <th>Nama Kegiatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $data->workshop_name }}</td>
                                    <td>
                                        <a href="#" class="btn-warning btn-sm ml-1" data-bs-toggle="modal"
                                            data-bs-target="#modal{{ $data->id }}">
                                            <i class="fas fa-pen-to-square text-white"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-right">
                        <a href="/dashboard/workshop/create" class="btn btn-primary btn-sm m-3 text-decoration-none"> Tambah
                            Kegiatan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
