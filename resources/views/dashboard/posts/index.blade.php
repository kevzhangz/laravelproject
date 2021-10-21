@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post</h1>
  </div>

  <div class="table-responsive col-lg-10">
    <a class="btn btn-primary mt-1 mb-2" href="/dashboard/posts/create">Create new Post</a>
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
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($posts as $post)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="{{ route('posts.show',$post) }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="{{ route('posts.edit',$post) }}" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="{{ route('posts.destroy',$post) }}" method="post" class="d-inline">
              @method('DELETE')
              @csrf
              <button class="badge bg-danger border-0" onclick='return confirm(`Delete this post?`)'><span data-feather="trash-2"></span></button>
            </form>
            <a href="dashboard/posts/{{ $post->id }}" class="badge bg-danger"></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection