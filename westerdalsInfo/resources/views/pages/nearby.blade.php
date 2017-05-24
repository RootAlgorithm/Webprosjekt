@extends('layouts.app')

@section('title', '- I nærheten')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-6">
                    <img src="#">
                </div>
                <div class="col-md-6">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->body }}</p>
                    <p><b>#Dato: #</b>#</p>
                    <p><b>#Sted: #</b>#</p>
                </div>

            @endforeach
        </div>
    </div>

@stop