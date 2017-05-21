@extends('layouts.app')

@section('content')

    <div class="container">
        @if(!$slides->isEmpty())
        @include('includes.slideshow')
        @endif
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Westerdals Infoside</div>

                    <div class="panel-body">
                        Under utvikling.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
