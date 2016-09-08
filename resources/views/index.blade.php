@extends('layouts.master')

@section('content')
    <div class="col-lg-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="http://image.noelshack.com/fichiers/2016/33/1471293393-alwl.jpg" alt="Chania">
                    <div class="carousel-caption carousel_text">
                        <h3>Carousel Test</h3>
                        <p>Test</p>
                    </div>
                </div>

                <div class="item">
                    <img src="http://image.noelshack.com/fichiers/2016/33/1471293393-alwl.jpg" alt="Chania">
                    <div class="carousel-caption carousel_text">
                        <h3>Carousel Test</h3>
                        <p>Test</p>
                    </div>
                </div>

                <div class="item">
                    <img src="http://image.noelshack.com/fichiers/2016/33/1471293393-alwl.jpg" alt="Flower">
                    <div class="carousel-caption carousel_text">
                        <h3>Carousel Test</h3>
                        <p>Test</p>
                    </div>
                </div>

                <div class="item">
                    <img src="http://image.noelshack.com/fichiers/2016/33/1471293393-alwl.jpg" alt="Flower">
                    <div class="carousel-caption carousel_text">
                        <h3>Carousel Test</h3>
                        <p>Test</p>
                    </div>
                </div>
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
    </div>

    {{-- news block --}}
    <div class="col-md-8">
        @foreach($news as $post)
            <div class="news">
                <div class="col-md-4 news">
                    <div class="hovereffect">
                        <img src="{{$post->images}}" alt="{{$post->title}}" class="img-responsive" />
                        <div class="overlay">
                            <span class="text-center">
                        <h2>{{ $post->title }}</h2></span>
                            <div class="caption_news">
                                <p>{!! str_limit($post->content, $limit=400, $end='...') !!} <br/> En savoir plus, cliquez sur le petit plus.</p>
                            </div>
                            <a class="info" href="/news/show/{{ $post->id }}-{{ $post->slug }}"><b>+</b></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- sponsors block --}}
    <div class="col-md-4">
        <div class="sponsors_princ">Our Sponsors</div>
        @foreach($sponsors as $sponsor)
            <a href="{{ $sponsor->link }}" target="_blank">
                <div class="col-md-3 sponsors">
                    <img src="{{ $sponsor->images }}" alt="{{ $sponsor->name }}" class="img-responsive">
                </div>
            </a>
        @endforeach
    </div>

        <div class="col-md-4">
            <div class="sponsors_princ">Streams</div>
            <div class="col-md-3">
                <iframe src="https://player.twitch.tv/?channel=madkraken_tv" frameborder="0" scrolling="no" height="308px" width="400.667px"></iframe>
            </div>
        </div>
@endsection