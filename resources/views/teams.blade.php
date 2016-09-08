@extends('layouts.master')

@section('content')

    @foreach($teams as $team)

    <img src="{{ $team->images }}" alt="name" />

    @endforeach

@endsection