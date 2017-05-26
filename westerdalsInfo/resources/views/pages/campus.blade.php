@extends('layouts.app')

@section('title', '- På campus')

@section('content')

    <div class="extended_header">
        <div class="col-md-6">
            <img src="#">
        </div>
        <div class="col-md-6">
            <h1>Header</h1>
            <p>Leter du etter en ekstrajobb mens du studerer eller vil du bare vite
                om det noe som skjer i studentbaren?
                </br>
                Her vil du (om du har registrert en bruker) få anbefalte
                arrangementer, Stillinger eller foreninger spesielt rettet mot deg!
                </br>
                Skjer det noe på Campus er dette plassen du får vite det!</p>
        </div>
    </div>

    @include('includes.current')

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