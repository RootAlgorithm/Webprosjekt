@extends('layouts.app')

@section('title', '- På campus')

@section('content')

    <div class="helt_aktuelt">
        <div class="helt_aktuelt_head">
            <h1>Aktuelt</h1>
        </div>
        <div class="helt_aktuelt_body">
            @for($i = 0; $i < 3; $i++)
                <div class="div-md-4">
                    <div class="hoved-kort">
                        <img class="kort-bilde" src="#">
                        <span class="kort-tekst">{!! $post->body !!}</span>
                        <p class="kort-tekst"><b>Oppdatert: </b>{{ date( 'j M Y - H:i', strtotime($post->updated_at)) }}</p>
                    </div>
                    <div class="under-kort">
                        <h2>{{ $post->title }}</h2>
                    </div>
                </div>
            @endfor
        </div>
    </div>

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