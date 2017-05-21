@extends('layouts.app')

@section('content')

    <div class="container">
        @if(!$slides->isEmpty())
            @include('includes.slideshow')
        @endif
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="main-card rounded-card">
                        <h2 class="text-center">{{ $post->title }}</h2>
                        <p>{{ $post->body }}</p>
                        <p>Postet i "{{ $post->category->name }}"</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
