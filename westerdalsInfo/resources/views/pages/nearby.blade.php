@extends('layouts.app')

@section('title', '- I nærheten')

@section('content')

    <div class="row" style="background-color: #343434">
        <div class="container">
            <div class="col-md-6">
                {{ Html::image('img/NearbyHeader.jpg', '', array('class' => 'img-responsive subpage-image-header')) }}
            </div>
            <div class="col-md-6">
                <h1 class="white-text">I Nærheten</h1>
                <p class="white-text">Ønsker du å finne ut hva som skjer i nærheten,
                    eller ønsker du bare å vite om det finnes noen studentvennlige
                    restauranter i nærheten?
                    <br><br>
                    Her vil du finne dette og mye mer!
                    <br><br>
                    Med en bruker hos oss vil du kunne få anbefalinger spesielt for deg.
                    Ellers har du selvfølgelig mulighet til å se blant de utallige
                    anbefalingene våre.</p>
            </div>
        </div>
    </div>

    <div class="container formSpaceTop">

        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="text-holder">
                        <span class="text-holder-plain">{!! $post->body !!}</span>
                        <p class="text-holder-plain"><b>Oppdatert: </b>{{ date( 'j M Y - H:i', strtotime($post->updated_at)) }}</p>
                        {{ Html::image('img/NearbyHeader.jpg', '', array('class' => 'img-responsive subpage-image-card')) }}
                    </div>
                    <h2>{{ $post->title }}</h2>
                </div>

            @endforeach
        </div>
    </div>

@stop