@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
    
        <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none pb-2">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
    </article>

    <a class="text-decoration-none" href="/blog">Back to Posts</a>
@endsection