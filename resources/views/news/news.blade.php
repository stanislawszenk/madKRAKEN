@extends('layouts.master')

@section('content')
<article class="blog">
    <h2>{{ $post->title }}</h2>
    <div class="date">Written <time datetime="{{ $post->created_at }}">{{ date('F d, Y', strtotime($post->created_at)) }}</time> by {{ $post->author }}</div><br />
    <div class="col-lg-4">
        <img src="{{ $post->images }}" alt="{{ $post->title }}" class="img-responsive">
    </div>
    <div class="col-lg-8">
        <p>{!! $post->content !!}</p>
    </div>
    <div class="clearfix"></div>
</article>
@endsection
