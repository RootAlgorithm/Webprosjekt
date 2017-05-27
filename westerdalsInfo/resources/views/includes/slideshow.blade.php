<div class="slideshow-container">
    @foreach($slides as $slide)
        <div>
            {{ Html::image($slide->img) }}
            <h1>Velkommen til Westerdals Studentinfo</h1>
            <div class="slideshow-subtext">
                Her finner du informajson relatert til studenter hos
                Westerdals vec Campus Fjerdingen. Du vil finne flotte
                rabatter, tips, arrangementer
            </div>
        </div>
    @endforeach
</div>
