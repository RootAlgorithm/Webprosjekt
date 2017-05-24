@extends('layouts.app')

@section('title', '- Poster')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1>Innlegg</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">

                @foreach($posts as $post)

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"> {{ $post->title }}</h3>
                        </div>
                        <div class="panel-body">{!! str_limit(strip_tags($post->body), 200) !!}</div>

                        <div class="panel-footer panel-footer-slim-right">{{ date( 'j M Y - H:i', strtotime($post->updated_at)) }}
                            <a href="{{ url('post/'.$post->niceurl) }}" class="btn-link">Les mer</a>
                        </div>
                    </div>

                @endforeach

                <div class="text-center">
                    {!! $posts->links(); !!}
                </div>

            </div>
        </div>
    </div>

@endsection
