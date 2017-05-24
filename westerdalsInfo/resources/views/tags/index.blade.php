@extends('layouts.app')

@section('title', '- Tagger')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Tagger:</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Navn:</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tags as $tag)
                        <tr>
                            <th>{{ $tag->id }}</th>
                            <td>{{ $tag->name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-3">
                {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
                <h2>Ny tag</h2>
                {{ Form::label('name', 'Navn:') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}

                {{ Form::submit('Opprett ny tag', array('class' => 'btn btn-primary brn-block', 'style' => 'margin-top: 15px;')) }}

                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection