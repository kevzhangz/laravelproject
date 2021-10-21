@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-8">
            <h2 class="mb-2">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left-circle"></span> Back to my post</a>
            <a href="{{ route('posts.edit',$post) }}" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="{{ route('posts.destroy',$post) }}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" onclick='return confirm(`Delete this post?`)'><span data-feather="trash-2"></span> Delete</button>
            </form>

            <article class="my-2 fs-5 ">
                @if($post->image)
                    <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}">
                @else
                    <img src="https://source.unsplash.com/800x400?{{ $post->category->name }}">
                @endif

                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection