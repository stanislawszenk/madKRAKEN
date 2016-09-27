<?php $count = 0;?>
@extends('layouts.master')

@section('content')
    <div class="col-lg-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                    @foreach($hotnews as $hot)
                    <div class="item @if($hot->id == $hot->first()->id) {{ 'active' }} @endif">
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
    </div>

    {{-- news block --}}
    <div class="row">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                @foreach($news as $post)
                    <div class="news">
                        <div class="col-md-4 news">
                            <div class="hovereffect">
                                <img src="{{$post->images}}" alt="{{$post->title}}" class="img-responsive" />
                                <div class="overlay">
                                    <span class="text-center">
                                <h2>{{ $post->title }}</h2></span>
                                    <div class="caption_news">
                                        {!! str_limit($post->content, $limit=200, $end='...') !!} <br/>
                                    </div>
                                    <a class="info" href="/news/show/{{ $post->id }}-{{ $post->slug }}"><b>+</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- sponsors block --}}
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                <div class="sponsors_princ">Our Sponsors</div>
                @foreach($sponsors as $sponsor)
                    <a href="{{ $sponsor->link }}" target="_blank">
                        <div class="col-xs-12 col-md-3 sponsors">
                            <img src="{{ $sponsor->images }}" alt="{{ $sponsor->name }}" class="img-responsive">
                        </div>
                    </a>
                @endforeach
            </div>

            <div class=" col-xs-12 col-md-6 col-md-12 col-lg-4">
                <div class="sponsors_princ">Streams</div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://player.twitch.tv/?channel=madkraken_tv" scrolling="no" class="embed-responsive-item"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
