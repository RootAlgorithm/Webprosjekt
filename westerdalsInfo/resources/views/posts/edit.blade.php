@extends('layouts.app')

@section('title', '- Rediger innlegg')

@section('content')

    <div class="container">
        <div class="row">

            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}

            <div class="col-md-8">

                {{ Form::label('title', 'Tittel:', array('style' => 'margin-top: 10px;')) }}
                {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}

                {{ Form::label('niceurl', 'Url:', array('class' => 'formSpaceTop')) }}
                {{ Form::text('niceurl', null, ['class' => 'form-control']) }}

                {{ Form::label('category_id', 'Kategori:', array('class' => 'formSpaceTop')) }}
                {{ Form::select('category_id', $categories, null, array('class' => 'form-control')) }}

                {{ Form::label('body', 'Innhold:', array('class' => 'formSpaceTop')) }}
                {{ Form::textarea('body', null, ['class' => 'form-control']) }}
            </div>

            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <dt>Opprettet:</dt>
                        <dd>{{ date( 'j M Y - H:i', strtotime($post->created_at)) }}</dd>
                    </dl>

                    <dl class="dl-horizontal">
                        <dt>Oppdatert:</dt>
                        <dd>{{ date( 'j M Y - H:i', strtotime($post->updated_at)) }}</dd>
                    </dl>

                    <hr>

                    <div class="row">
                        <div class="col-sm-6">
                            {{ Form::submit('Oppdater', array('class' => 'btn btn-success btn-block')) }}
                        </div>
                        <div class="col-sm-6">
                            {!! Html::linkRoute('posts.show', 'Avbryt', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                        </div>
                    </div>
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>

@endsection