@extends('layouts.main')
@include('partials.navbar')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h3 class="title-page mb-1">My Project</h3>
    <a href="/dashboard/posts/create" class="btn btn-primary">Create new project</a>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-12 mt-4">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($posts as $post)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                    <td>
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i class="fa-solid fa-eye"></i></a>

                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><i class="fa-solid fa-pen-to-square"></i></a>

                        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          
                          <button class="badge bg-danger border-0" onclick="return confirm('Hapus project?')"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection