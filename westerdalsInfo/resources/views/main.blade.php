@extends('layouts.app')

@section('content')

    <div class="container">
        @if(!$slides->isEmpty())
            @include('includes.slideshow')
        @endif
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-6">
                    <div class="main-card rounded-card">
                        <h2 class="text-center">{{ $post->title }}</h2>
                        <span>{!! $post->body !!}</span>
                        <hr>
                        <p>Postet i "{{ $post->category->name }}"</p>
                        @if(!$post->tags->isEmpty())
                            <p>Tags:
                                @foreach($post->tags as $tag)
                                    {{ $tag->tag }}
                                @endforeach
                            </p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
