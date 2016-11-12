@extends('layouts.master')

@section('content')
<div class="col-md-12">
    <div class="profile">
        <img src="{{URL::asset(Auth::user()->avatar)}}">
        Pseudo: {{Auth::user()->name}}
        Email: {{Auth::user()->email}}
        Password: {{Auth::user()->password}}
    </div>
</div>
@endsection
