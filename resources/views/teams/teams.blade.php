@extends('layouts.master')

@section('content')
<ul class="teams" style="position:fixed; left: 0; width: 15%;">
    @foreach($teams as $t)
    <li class="text-center"><a href="#{{$t->id}}{{$t->id}}"><img src="{{asset($t->images)}}" class="img-responsive img-circle" style="width: 58px; height: 58px; float:right; margin: 10px;" /><span style="margin-top: 20px;position: absolute;left: 30%;">{{$t->name}}</span></a></li>
    @endforeach
</ul>
<!-- ici tu géreras l'affichage des team, auxquels on va rajouter une colonne
dans le SQL qui va s'appeler name en VARCHAR(255) histoire d'avoir un nom
 propre en Counter Strike ou Heroes of the Storm...!-->
 @foreach($teams as $team)
<section id="{{$team->id}}{{$team->id}}" class="col-lg-12" style="margin-bottom: 50px;background: rgba(12, 43, 84, 0.8);">
        <div class="text-center">
            <img src="{{$team->images}}" class="img-responsive" style="width: 1170px; height: 400px;" />
        </div>
        <div role="tabpanel">
            <div >
                <!-- Nav tabs -->
                <ul class="[ nav nav-justified ]" id="nav-tabs" role="tablist">
            @each('teams.player', $team->players, 'player')
        </ul>
            <div class="tab-content" id="tabs-collapse">
                @each('teams.description', $team->players, 'player')
            </div>
    </div>
</div>
</section>
@endforeach
@endsection
