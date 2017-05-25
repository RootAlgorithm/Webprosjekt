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
                    <span>{!! $post->body !!}</span>
                    <p><b>Oppdatert: </b>{{ date( 'j M Y - H:i', strtotime($post->updated_at)) }}</p>
                    <p><b>Sted: </b>#</p>
                </div>

            @endforeach
        </div>
    </div>

@stop