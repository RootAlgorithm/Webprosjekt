@extends('layouts.app')

@section('title', '- Skriv nytt innlegg')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Skriv nytt innlegg</h2>
                <hr>

                {!! Form::open(['route' => 'posts.store']) !!}
                {{ Form::label('title', 'Tittel:', array('style' => 'margin-top: 10px;')) }}
                {{ Form::text('title', null, array('class' => 'form-control')) }}

                {{ Form::label('niceurl', 'Url:', array('class' => 'formSpaceTop')) }}
                {{ Form::text('niceurl', null, array('class' => 'form-control')) }}

                {{ Form::label('category_id', 'Kategori:', array('class' => 'formSpaceTop')) }}
                <select class="form-control" name="category_id">

                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

                </select>

                {{ Form::label('body', 'Innhold:', array('class' => 'formSpaceTop')) }}
                {{ Form::textarea('body', null, array('class' => 'form-control')) }}

                {{ Form::submit('Publiser innlegg', array('class' => 'btn btn-success btn-lg', 'style' => 'margin-top: 10px;')) }}
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@endsection