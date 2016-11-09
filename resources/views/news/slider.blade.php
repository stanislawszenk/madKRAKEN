<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @foreach($hotnews as $index => $hot)
        <div class="item @if($index == 0) {{ 'active' }} @endif">
        <img src="{{ $hot->images }}" alt="{{ $hot->title }}">
        <div class="carousel-caption carousel_text">
            <h3><a class="info" href="/news/show/{{ $hot->id }}-{{ $hot->slug }}">{{ $hot->title }}</a></h3>
            <p>{!! str_limit($hot->content, $limit=200, $end='...') !!}</p>
        </div>
        </div>
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="left:10px;"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="right:10px;"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
