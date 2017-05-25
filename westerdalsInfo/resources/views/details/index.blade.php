@extends('layouts.app')

@section('title', '- '.$user->name)

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>
                {{ $user->name }}
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table">
                <tr>
                    <th>E-post:</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>Tlf:</th>
                    <td>{{ $details->phone }}</td>
                </tr>
                <tr>
                    <th>Adresse:</th>
                    <td>{{ $details->address }}</td>
                </tr>
                <tr>
                    <th>Campus:</th>
                    <td>{{ $details->campus }}</td>
                </tr>
                <tr>
                    <th>Klasse:</th>
                    <td>{{ $details->class }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection