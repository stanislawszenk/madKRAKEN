@extends('layouts.master')

@section('content')
<div class="col-lg-12 blog">
@foreach($teams as $team)
    <div class="text-center">
        <img src="{{$team->images}}" class="img-responsive" />
    </div>
        @each('teams.player', $team->players, 'player')
@endforeach
</div>
</div class="clearfix"></div>

@endsection
