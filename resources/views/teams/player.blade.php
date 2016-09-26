@extends('layouts.master')

@section('content')

<div class="panel panel-default">
<div class="panel-body">
{{var_dump($player)}}

</div>
</div>
@foreach($player as $player)
<div class="row"><div class="col-lg-4"><h1>{{ $player->name }}</h1></div></div>
@endforeach
@endsection
