@extends('layouts.main')

@section('container')
    <h2>Hello my name is {{ $name }}</h2>
    <img src="img/{{ $img }}" alt="{{ $name }}" width="200px" class="img-thumbnail rounded-circle">
@endsection