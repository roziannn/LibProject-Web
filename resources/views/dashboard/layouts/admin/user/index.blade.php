@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <div class="container">
        <div class="row">
            @include('dashboard.layouts.admin.partials.sidebar')
            <div class="col-md-9">
                <div class="card content p-4">
                    <strong class="fs-5 border-bottom mb-2">Data Akun User</strong>
                    <div class="alert alert-info my-2" role="alert">
                        <small class="text-muted">Use desktop mode to view tables more optimally</small>
                    </div>
                    <div class="d-flex justify-content-between">
                        <table class="table small">
                            <thead>
                                <tr>
                                    <th >Username</th>
                                    <th class="text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1 @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->username }}</td>
                                        <td class="text-right">
                                            <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modal{{ $item->id }}">
                                                <i class="fas fa-pen-to-square text-white"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($data as $item)
        <div class="modal fade" id="modal{{ $item->id }}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/dashboard/admin/user/edit' . $item->id) }}" method="POST">
                            {{ csrf_field() }}
                            <div class="col-sm-12">
                                <label class="small mb-1" for="roles">Roles</label>
                                <input class="form-control" id="roles" name="roles" type="text"
                                    value="{{ $item->roles }}" autocomplete="off">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light btn-sm pull-left" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
