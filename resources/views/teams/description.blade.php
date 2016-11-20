<div role="tabpanel" class="tab-pane fade @if($key == 0) {{ 'active in' }} @endif" id="{{$player->id}}">
    <div class="tab-inner">
        <p><strong class="text-uppercase">{{$player->firstname}} {{$player->nickname}} {{$player->name}}</strong></p>
        <p><em class="text-capitalize"></em></p>
        <hr>
        <p class="description">{!! $player->description !!}</p>

    </div>
</div>
