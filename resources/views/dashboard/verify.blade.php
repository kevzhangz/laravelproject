@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        @cannot('verified')
            <h1>Verify Email</h1>
        @endcannot
        @can('verified')
            <h1>Verified</h1>
        @endcan
    </div>
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @cannot('verified')
        <form action="{{ route('verification.send') }}" method="POST">
            @csrf
            <button class="btn btn-primary mt-1 mb-2">Verify Email</button>
        </form>
    @endcannot
    @can('verified')
        <a href="{{ route('posts.index') }}" class="btn btn-primary mt-1 mb-2">Back to My Posts</a>
    @endcan
@endsection