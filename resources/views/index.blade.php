@extends('layouts.master')

@section('content')
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
@endsection