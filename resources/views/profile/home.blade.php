@extends('layouts.master')

@section('content')
<div class="container">
    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="{{asset($user->avatar)}}" name="aboutme" width="140" height="140" class="img-circle"></a>
        <h3>{{$user->name}}</h3>
        <em>Click here for more details</em>
		</center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">More About {{$user->name}}</h4>
                    </div>
                <div class="modal-body">
                    <center>
                    <img src="{{asset($user->avatar)}}" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading">{{$user->name}} <small>EU</small></h3>
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong></strong><br>
                        {{$user->email}}</p>
                    <br>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about {{$user->name}}</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
