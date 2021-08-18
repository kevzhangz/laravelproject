@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
    
        <p>By. <a href="/about" class="text-decoration-none pb-2">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
    </article>

    <a class="text-decoration-none" href="/blog">Back to Posts</a>
@endsection