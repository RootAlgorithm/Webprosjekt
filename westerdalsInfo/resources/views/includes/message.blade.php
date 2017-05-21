@if (Session::has('success'))
    <div class="container">
        <div class="alert alert-success" role="alert">
            <strong>Suksess: </strong> {{ Session::get('success') }}
        </div>
    </div>

@elseif(Session::has('criterror'))

    <div class="container">
        <div class="alert alert-danger" role="alert">
            <strong>OVERJORDISK FEIL: </strong> {{ Session::get('criterror') }}
        </div>
    </div>

@endif

@if (count($errors) > 0)

    <div class="container">
        <div class="alert alert-danger" role="alert">
            <strong>Feilmeldinger: </strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif