@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Singolo Post</h1>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->slug }}</p>
        <p>Category: {{ $post->category ? $post->category->name : '' }} </p>
    </div>
    <div class="container">
        {!! $post->content !!}
    </div>
    @if ($post ->category)
        
    <div class="container">
        @foreach ($post->category->projects as $related_post)
            <h3>
                <a href="{{ route('admin.projects.show', $related_post) }}">{{ $related_post->title }}</a>
                
            </h3>
        @endforeach
    </div>
    @endif
    <button class="btn btn-primary">
        <a href="{{ route('admin.projects.index') }}" class="text-decoration-none text-light">Projects</a>
    </button>
    @endsection