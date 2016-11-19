@extends('layouts.app')

@section('content')
<div class="row">
    @if (session('message'))
       <div class="alert alert-success">
           {{ session('message') }} <i class="fa fa-check-circle-o fa-lg" aria-hidden="true"></i>
       </div>
   @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }} <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-md-4 col-sm-4 col-xs-12 gutter">

        <div class="sales">
            <h2>Create Teams</h2>
            <div style="position:relative; margin-top:40px;">
            @include('admin.teams.create_teams')
        </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12 gutter">

        <div class="sales report">
            <h2>Edit Team</h2>
            @include('admin.teams.edit_teams')

        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12 gutter">

        <div class="sales report">
            <h2>Delete Team</h2>
            @include('admin.teams.delete_teams')
        </div>
    </div>
</div>
@endsection
