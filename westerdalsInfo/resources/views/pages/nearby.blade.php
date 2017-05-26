@extends('layouts.app')

@section('title', '- I nærheten')

@section('content')

    <div class="row" style="background-color: #343434">
        <div class="container">
            <div class="col-md-6">
                {{ Html::image('img/NearbyHeader.jpg', '', array('class' => 'img-responsive subpage-image-header')) }}
            </div>
            <div class="col-md-6">
                <h1 class="white-text">Header</h1>
                <p class="white-text">Leter du etter en ekstrajobb mens du studerer eller vil du bare vite
                    om det noe som skjer i studentbaren?
                    </br>
                    Her vil du (om du har registrert en bruker) få anbefalte
                    arrangementer, Stillinger eller foreninger spesielt rettet mot deg!
                    </br>
                    Skjer det noe på Campus er dette plassen du får vite det!</p>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4">
                    <h2>{{ $post->title }}</h2>
                    <span>{!! $post->body !!}</span>
                    <p><b>Oppdatert: </b>{{ date( 'j M Y - H:i', strtotime($post->updated_at)) }}</p>
                </div>

            @endforeach
        </div>
    </div>

@stop