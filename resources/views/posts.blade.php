@extends('layouts.main')


@section('container')
    <h2 class="mb-4">{{ $title }}</h2>

    @foreach($posts as $post)
        <article class="mb-4 border-bottom pb-2">
            <h2><a class="text-decoration-none" href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a class="text-decoration-none" href="/blog/{{ $post->slug }}">Read More</a>
        </article>
    @endforeach

@endsection