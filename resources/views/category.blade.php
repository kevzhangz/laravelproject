@extends('layouts.main')

@section('container')
    <h1>Post Category : {{ $category }}</h1>

    @foreach($posts as $post)
        <article>
            <h2><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

    <a href="/categories">Back to Categories</a>
@endsection