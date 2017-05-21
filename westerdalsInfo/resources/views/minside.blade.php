@extends('layouts.app')

@section('title', '- Min side')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Min side</div>

                <div class="panel-body text-center">
                    <h2>{{ $user->name }}</h2>
                    <p>Du er logget inn!</p>
                    <p>Her kommer min side!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
