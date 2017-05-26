<div class="slideshow-container">
    @foreach($slides as $slide)
        <div>
            {{ Html::image($slide->img) }}
            <h1 class="slideshow-text">Velkommen til Westerdals Studentinfo</h1>
            <div class="slideshow-subtesxt">
                <p>Her finner du informajson relatert til studenter hos</p>
                <p>Westerdals vec Campus Fjerdingen. Du vil finne flotte</p>
                <p>rabatter, tips, arrangementer</p>
            </div>
        </div>
    @endforeach
</div>
