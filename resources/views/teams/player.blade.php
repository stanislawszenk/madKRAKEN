	<div class="col-lg-12 row teams">
        <img src="{{ $player->player_images }}" alt="{{ $player->name }}" class="img-responsive" />
        <div class="player_introduce">
        <span class="name">{{ $player->firstname }}</span> "<span class="nickname">{{ $player->nickname }}</span>" <span class="name">{{ $player->name }}</span>
        <p>{{ $player->description }}</p>
        </div>
</div>

