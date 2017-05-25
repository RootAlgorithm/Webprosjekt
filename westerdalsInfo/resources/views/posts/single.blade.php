@extends('layouts.app')

@section('title', "- $post->title")

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>
                <span>{!! $post->body !!}</span>

                <hr>

                <div class="tags">
                    @foreach($post->tags as $tag)
                        <span class="label label-default"> {{ $tag->tag }}</span>
                    @endforeach
                </div>
            </div>

            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <dt>URL:</dt>
                        <dd><a href="{{ route('posts.single', $post->niceurl) }}">{{ $post->niceurl }}</a></dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Opprettet:</dt>
                        <dd>{{ date( 'j M Y - H:i', strtotime($post->created_at)) }}</dd>
                    </dl>

                    <dl class="dl-horizontal">
                        <dt>Oppdatert:</dt>
                        <dd>{{ date( 'j M Y - H:i', strtotime($post->updated_at)) }}</dd>
                    </dl>

                    <dl class="dl-horizontal">
                        <dt>Kategori:</dt>
                        <dd>{{ $post->category->name }}</dd>
                    </dl>

                    @if(Auth::check())

                        <hr>

                        <div class="row">
                            <div class="col-sm-6">
                                {!! Html::linkRoute('posts.edit', 'Rediger', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'DELETE')) !!}

                                {!! Form::submit('Slett', array('class' => 'btn btn-danger btn-block')) !!}

                                {!! Form::close() !!}
                            </div>
                        </div>

                    @endif

                </div>
            </div>
        </div>
    </div>

@endsection