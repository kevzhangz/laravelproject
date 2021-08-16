@extends('layouts.main')


@section('container')
    <h2 class="mb-4">This is Blog</h2>

    @foreach($posts as $post)
        <article>
            <h2><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

@endsection