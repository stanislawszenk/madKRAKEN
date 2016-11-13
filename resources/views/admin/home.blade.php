@extends('layouts.app')

@section('content')
<h1>Hello, {{Auth::user()->name}}</h1>
<div class="row">
    <div class="col-md-5 col-sm-5 col-xs-12 gutter">

        <div class="sales">
            <h2>Last News</h2>
        <ul class="last_news">
            @foreach($post as $news)
        <li><h3><a class="btn btn-info btn-block" href="/admin/edit-news/{{ $news->id }}/edit" target="_BLANK">{{$news->title}}</a></h3></li>
            @endforeach
        </ul>
        </div>
    </div>
    <div class="col-md-7 col-sm-7 col-xs-12 gutter">

        <div class="sales report">
            <h2>Last users Registered</h2>
            <ul class="last_news">
            @foreach($user as $user)
            <li><h3><a class="btn btn-info btn-block" href="/profile/{{$user->id}}-{{$user->name}}" target="_BLANK">{{$user->name}}</a></h3></li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
