<!--ici on gére l'affichage des joueurs!-->
<li role="presentation" class="@if($key == 0) {{ 'active' }} @endif">
    <a href="#{{$player->id}}" aria-controls="{{$player->id}}" role="tab" data-toggle="tab">
        <img class="img-circle img-responsive" src="{{asset($player->images)}}" style="width: 159px; height: 149px;" />
    </a>
</li>
