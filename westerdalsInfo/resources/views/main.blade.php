@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            @if(!$slides->isEmpty())
                @include('includes.slideshow')
            @endif
        </div>
    </div>
    <div class="container">
        <div class="row">
            @include('includes.main-links')
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2 class="text-center">Aktuelt!</h2>
            </div>
        </div>
        @include('includes.current')
    </div>
@endsection
