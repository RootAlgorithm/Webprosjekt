<div class="col-md-3">
    <div>
        {{ Html::image('img/rabatt.png', '', array('class' => 'center-block img-responsive', 'style' => 'width: 50%')) }}
        <h4 class="text-center">Rabatter</h4>
        <p class="text-center">Her kan du se flotte rabatter basert på dine interesser. Vi oppdaterer hele tiden med nye rabatter!</p>
        <a class="btn btn-info btn-block main-links-btn" href="{{ url('/discount') }}">Les mer her</a>
    </div>
</div>

<div class="col-md-3">
    <div>
        {{ Html::image('img/geotag.png', '', array('class' => 'center-block img-responsive', 'style' => 'width: 50%')) }}
        <h4 class="text-center">I nærheten</h4>
        <p class="text-center">Se hva som er og skjer i nærheten, du finner alltid noe som er er interessant for akkurat deg.</p>
        <a class="btn btn-info btn-block main-links-btn" href="{{ url('/nearby') }}">Les mer her</a>
    </div>
</div>

<div class="col-md-3">
    <div>
        {{ Html::image('img/campus.png', '', array('class' => 'center-block img-responsive', 'style' => 'width: 50%')) }}
        <h4 class="text-center">På campus</h4>
        <p class="text-center">Se det som skjer på Campus som er interessant for akkurat deg, eller se gjennom etter andre spennende ting som skjer</p>
        <a class="btn btn-info btn-block main-links-btn" href="{{ url('/campus') }}">Les mer her</a>
    </div>
</div>

<div class="col-md-3">
    <div>
        {{ Html::image('img/minside.png', '', array('class' => 'center-block img-responsive', 'style' => 'width: 50%')) }}
        <h4 class="text-center">Min side</h4>
        <p class="text-center">Legg til dine interesser og få innhold basert på dette.</p>
        <a class="btn btn-info btn-block main-links-btn" href="{{ url('/home') }}">Les mer her</a>
    </div>
</div>