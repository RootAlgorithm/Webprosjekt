@extends('layouts.app')

@section('title', '- Rabatter')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($posts as $post)

                <div class="col-md-4">
                    <h2>{{ $post->title }}</h2>
                    <span>{!! $post->body !!}</span>
                </div>

            @endforeach
        </div>
    </div>

@stop