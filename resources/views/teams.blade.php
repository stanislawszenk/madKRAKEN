@extends('layouts.master')

@section('content')
<div class="panel panel-default">
<div class="panel-body">
{{var_dump($teams)}}

</div>
</div>
    <div class="col-lg-8">
    @foreach($teams as $team)

    <img src="{{ $team->images }}" alt="name" />

    @endforeach
    </div>
@endsection
