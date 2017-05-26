@extends('layouts.app')

@section('title', '- Rabatter')

@section('content')

    <div class="container formSpaceTop">
        <div class="row">
            <?php $i = 0 ?>
            @foreach($posts as $post)

                <?php $i++ ?>

                <div class="col-md-4">
                    <div class="discount-card">
                        <h2>{{ $post->title }}</h2>
                        <span>{!! $post->body !!}</span>
                        @if(isset($post->img))
                            {{ Html::image('img/' . $post->img, '', array('class' => 'img-responsive')) }}
                        @endif
                    </div>
                </div>

                @if($i % 3 == 0)
        </div>
        <hr>
        <div class="row">

            @endif

            @endforeach
        </div>
    </div>

@stop