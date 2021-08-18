@extends('layouts.main')

@section('container')
    <h1>Post Category : {{ $category }}</h1>

    @foreach($posts as $post)
        <article class="mb-4 border-bottom">
            <h2><a class="text-decoration-none" href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

    <a class="text-decoration-none" href="/categories">Back to Categories</a>
@endsection