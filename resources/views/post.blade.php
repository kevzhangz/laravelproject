@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-2">{{ $post->title }}</h2>
                <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none pb-2">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-2 fs-5">
                    {!! $post->body !!}
                </article>

                <a class="text-decoration-none btn btn-primary mb-3" href="/blog/">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection