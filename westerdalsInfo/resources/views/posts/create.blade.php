@extends('layouts.app')

@section('title', '- Skriv nytt innlegg')

@section('stylesheets')
    {!! Html::style('css/select2.min.css') !!}

    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=wk29dlbmgg1q2ithi9zs1xsk3izvyndzb72k5augc0d0q14i"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'link',
            menubar: false
        })
    </script>

@endsection

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

                {{ Form::label('tags', 'Tagger:', array('class' => 'formSpaceTop')) }}
                <select class="form-control select2-class" name="tags[]" multiple="multiple">

                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->tag }}</option>
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


@section('scripts')

    {{ Html::script('js/select2.min.js') }}

    <script type="text/javascript">
        $('.select2-class').select2();
    </script>

@endsection