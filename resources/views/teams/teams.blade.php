@extends('layouts.master')

@section('content')
<ul style="position:fixed; float:left; left:0; background:#fff">
    @foreach($teams as $t)
    <li><a href="#{{$t->id}}">{{$t->name}}</a></li>
    @endforeach
</ul>
<!-- ici tu géreras l'affichage des team, auxquels on va rajouter une colonne
dans le SQL qui va s'appeler name en VARCHAR(255) histoire d'avoir un nom
 propre en Counter Strike ou Heroes of the Storm...!-->
 @foreach($teams as $team)
<section id="{{$team->id}}" class="single-page scrollblock col-lg-12">
        <div class="text-center">
            <img src="{{$team->images}}" class="img-responsive" />
        </div>
            @each('teams.player', $team->players, 'player')
</section>
@endforeach
@endsection
