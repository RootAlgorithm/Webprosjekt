@extends('layouts.app')

@section('title', '- På campus')

@section('content')

    <div class="row" style="background-color: #343434">
        <div class="container">
            <div class="col-md-6">
                {{ Html::image('img/CampusHeader.JPG', '', array('class' => 'img-responsive subpage-image-header')) }}
            </div>
            <div class="col-md-6">
                <h1 class="white-text">Hva skjer på camspus</h1>
                <p class="white-text">Leter du etter en ekstrajobb mens du studerer eller vil du bare vite
                    om det noe som skjer i studentbaren?
                    </br><br/>
                    Her vil du (om du har registrert en bruker) få anbefalte
                    arrangementer, Stillinger eller foreninger spesielt rettet mot deg!
                    </br><br/>
                    Skjer det noe på Campus er dette plassen du får vite det!</p>
            </div>
        </div>
    </div>

    <div class="container formSpaceTop">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="text-holder">
                        <span class="text-holder-plain">{!! $post->body !!}</span>
                        {{ Html::image('img/NearbyHeader.jpg', '', array('class' => 'img-responsive subpage-image-card')) }}
                    </div>
                    <h2>{{ $post->title }}</h2>
                </div>

            @endforeach
        </div>
    </div>

@stop