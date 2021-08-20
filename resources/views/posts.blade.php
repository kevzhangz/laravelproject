@extends('layouts.main')


@section('container')
    <h2 class="mb-4">{{ $title }}</h2>
    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
            <h5 class="card-title"><a class="text-decoration-none text-dark" href="/blog/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
            <p>
                <small class="text-muted">
                    By. <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                    {{ $posts[0]->created_at->diffforHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a class="text-decoration-none btn btn-primary" href="/blog/{{ $posts[0]->slug }}">Read More</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">Post not found</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute bg-dark px-3 py-2 text-white"><a class="text-decoration-none text-white" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></div>
                        <img src="https://source.unsplash.com/500x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-decoration-none text-dark" href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h5>
                            <p>
                                <small class="text-muted">
                                    By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                                    {{ $post->created_at->diffforHumans() }}
                                </small>
                            </p>
                            <p>{{ $post->excerpt }}</p>
                            <a class="text-decoration-none btn btn-primary" href="/blog/{{ $post->slug }}">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection