@extends('layouts.main')
@include('partials.navbar')

@section('container')
    <div class="container">
        <div class="row">
            @include('dashboard.layouts.admin.sidemenu')
            <div class="col-md-9 pl-md-0">
                <div class="card user-settings__wrapper">
                    <div class="user-settings__title">
                        <h4>Data User</h4>
                    </div>
                    <div class="col-md-12">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Roles</th>
                                    <th>Created_at</th>
                                    <th>Last_login</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1 @endphp
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->roles }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>yesterday</td>
                                        <td>
                                            <a href="#" class="btn-warning btn-sm ml-1" data-bs-toggle="modal"
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
                        <form action="{{ url('/dashboard/admin/category/delete' . $item->id) }}" method="GET">
                            {{ csrf_field() }}
                            <div class="col-sm-12">
                                <label class="small mb-1" for="roles">Roles</label>
                                <input class="form-control" id="roles" name="roles" type="text"
                                    value="{{ $item->roles }}">
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
@push('styles')
    <link href="{{ asset('css/settings.css') }}" rel="stylesheet">
@endpush
