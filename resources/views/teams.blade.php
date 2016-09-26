@extends('layouts.master')

@section('content')
<div class="panel panel-default">
<div class="panel-body">


    <div class="col-lg-8">
    @foreach($teams as $team)
        <img src="{{$team->images}}" width="50%" height="50%" />

        @each('teams.player', $team->players, 'player')
    @endforeach
    </div>

</div>
</div>

@endsection
