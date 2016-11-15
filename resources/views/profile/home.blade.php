@extends('layouts.master')

@section('content')
<div class="col-md-12">
    <div class="profile">
        <img src="{{URL::asset($user->avatar)}}">
        Pseudo: {{$user->name}}
        Email: {{$user->email}}
        Password: {{$user->password}}
    </div>
</div>
@endsection
