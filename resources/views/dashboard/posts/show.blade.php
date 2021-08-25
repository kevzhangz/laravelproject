@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-8">
            <h2 class="mb-2">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left-circle"></span> Back to my post</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="trash-2"></span> Delete</a>
            <article class="my-2 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection