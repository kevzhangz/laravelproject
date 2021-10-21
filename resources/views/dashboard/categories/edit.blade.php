@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Post</h1>
</div>
<div class="col-lg-6">
    <form action="{{ route('categories.update',$category) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"autofocus value="{{ old('name', $category->name) }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
        </div>
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $category->slug) }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-4">Submit</button>
    </form>
</div>

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('input', function() {
        fetch('/dashboard/posts/checkSlug?title=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    })
</script>
@endsection