<div class="slideshow-container">
    @foreach($slides as $slide)
        <div>
            {{ Html::image($slide->img) }}
            <p class="slideshow-text">{{ $slide->body }}</p>
        </div>
    @endforeach
</div>
