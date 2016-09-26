@extends('layouts.master')

@section('content')

    @foreach($team_player as $team)
        {{var_dump($team_player)}}
    <div class="col-lg-8">
    <img src="{{ $team->images }}" alt="name" />
</div>
    @endforeach
    @foreach($team_player as $player)



    <div class="row"><div class="col-lg-4"><h1>{{ $player->name }}</h1></div></div>
    @endforeach
@endsection
