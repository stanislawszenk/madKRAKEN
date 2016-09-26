@extends('layouts.master')

@section('content')
<div class="panel panel-default">
<div class="panel-body">
{{var_dump($teams)}}

</div>
</div>
    <div class="col-lg-8">
    @foreach($teams as $team)
    <img src="{{ $team->images }}" width="50%" height="50%" />
    @endforeach
            @include('teams.player')
    </div>

@endsection
