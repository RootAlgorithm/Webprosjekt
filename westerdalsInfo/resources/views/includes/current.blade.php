<div class="row">
    @for($i = 0; $i < 3; $i++)

        <div class="col-md-4">
            <div class="main-card rounded-card">
                <h2 class="text-center">{{ $posts[$i]->title }}</h2>
                <span>{!! $posts[$i]->body !!}</span>
                <hr>
                <p>Postet i "{{ $posts[$i]->category->name }}"</p>
                @if(!$posts[$i]->tags->isEmpty())
                    <p>Tags:
                        @foreach($posts[$i]->tags as $tag)
                            {{ $tag->tag }}
                        @endforeach
                    </p>
                @endif
            </div>
        </div>
    @endfor
</div>
<div class="row">
    @for($i = 3; $i < 6; $i++)
        <div class="col-md-4">
            <div class="main-card rounded-card">
                <h2 class="text-center">{{ $posts[$i]->title }}</h2>
                <span>{!! $posts[$i]->body !!}</span>
                <hr>
                <p>Postet i "{{ $posts[$i]->category->name }}"</p>
                @if(!$posts[$i]->tags->isEmpty())
                    <p>Tags:
                        @foreach($posts[$i]->tags as $tag)
                            {{ $tag->tag }}
                        @endforeach
                    </p>
                @endif
            </div>
        </div>
    @endfor
</div>