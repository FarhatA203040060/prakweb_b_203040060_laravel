@extends('layouts.main')

@section('container')
    <h1>{{ $post->tittle }}</h1>

    <p>By. Farhat Aldjaidi in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <a href="/blog">Back To Posts</a>

@endsection
