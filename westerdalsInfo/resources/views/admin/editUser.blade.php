@extends('layouts.app')

@section('title', '- Edit user')

@section('content')

    <div class="container">
        <div class="row">
            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}

            <div class="col-md-8">
                {{ Form::label('name', 'Brukernavn:', array('style' => 'margin-top: 10px;')) }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}

                {{ Form::label('email', 'E-post:', array('style' => 'margin-top: 10px;')) }}
                {{ Form::text('email', null, ['class' => 'form-control']) }}


                {{ Form::label('admin', 'Admin:', array('style' => 'margin-top: 10px;')) }}
                {{ Form::checkbox('admin', null) }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-4">
                {{ Form::submit('Oppdater', array('class' => 'btn btn-success btn-block')) }}
            </div>
            <div class="col-md-2">
                {!! Html::linkRoute('users.index', 'Avbryt', null ,array('class' => 'btn btn-danger btn-block')) !!}
            </div>
        </div>
    </div>

@stop