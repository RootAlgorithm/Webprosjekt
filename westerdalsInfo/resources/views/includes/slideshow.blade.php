<div class="slideshow-container">
    @foreach($slides as $slide)
        <div>
            {{ Html::image($slide->img) }}
            <h1>Velkommen til Westerdals Studentinfo</h1>
            <div class="slideshow-subtext">
                Her finner du informajson relatert til studenter hos
                Westerdals ved Campus Fjerdingen. Du vil finne flotte
                rabatter, tips, og arrangementer!
            </div>
        </div>
    @endforeach
</div>
