<!--ici on gére l'affichage des joueurs!-->
<div class="col-md-2">
	<img src="{{asset($player->images)}}"
	class="img-circle img-responsive" >
	<h3 class="text-center" >{{$player->firstname}} {{$player->nickname}} {{$player->name}}
	<small>{!!$player->description!!}</small></h3>
</div>
