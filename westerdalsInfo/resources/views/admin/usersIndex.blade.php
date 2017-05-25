@extends('layouts.app')

@section('title', '- Users')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1>Brukere:</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <table class="table">
                    <tr>
                        <th>Navn:</th>
                        <th>E-post:</th>
                        <th>Admin:</th>
                        <th></th>
                    </tr>

                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->admin? 'Admin' : '' }}</td>
                            <td>{!! Html::linkRoute('users.edit', 'Rediger', array($user->id), array('class' => 'btn btn-info btn-block')) !!}</td>
                        </tr>
                    @endforeach

                </table>
            </div>

        </div>

    </div>

@stop