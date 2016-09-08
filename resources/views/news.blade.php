@extends('layouts.master')

@section('content')
<article class="blog">
    <h2>{{ $post->title }}</h2>
    <div class="date">Rédiger le <time datetime="{{ $post->date }}">{{ $post->date }}</time> par {{ $post->author }}</div><br />
    <div class="col-lg-4">
        <img src="{{ $post->images }}" alt="{{ $post->title }}" class="img-responsive">
    </div>
    <div class="col-lg-8">
        <p>{!! $post->content !!}</p>
    </div>
    <div class="clearfix"></div>
</article>
@endsection