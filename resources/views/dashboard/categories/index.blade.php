@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
  </div>

  <div class="table-responsive col-lg-10">
    <a class="btn btn-primary mt-1 mb-2" href="{{ route('categories.create') }}">Create new Categories</a>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>
            <a href="{{ route('categories.edit',$category) }}" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="{{ route('categories.destroy',$category) }}" method="post" class="d-inline">
              @method('DELETE')
              @csrf
              <button class="badge bg-danger border-0" onclick='return confirm(`Delete this post?`)'><span data-feather="trash-2"></span></button>
            </form>
            <a href="dashboard/posts/{{ $category->id }}" class="badge bg-danger"></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection