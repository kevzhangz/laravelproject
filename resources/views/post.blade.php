@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-2">{{ $post->title }}</h2>
                <p>By. <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none pb-2">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                @if($post->image)
                    <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}">
                @else
                    <img src="https://source.unsplash.com/800x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="my-2 fs-5">
                    {!! $post->body !!}
                </article>

                <a class="text-decoration-none btn btn-primary mb-3" href="/blog/">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection