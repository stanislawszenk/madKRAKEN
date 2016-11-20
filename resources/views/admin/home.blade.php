@extends('layouts.app')

@section('content')
<h1>Hello {{Auth::user()->name}}</h1>
<div class="row">
    <div class="col-md-5 col-sm-5 col-xs-12 gutter">

        <div class="sales">
            <h2>Last News</h2>
        <ul class="last_news">
            @foreach($post as $news)
        <li ><h3><a class="btn btn-info" href="news/show/{{ $news->id }}-{{ $news->slug }}" target="_BLANK">{{$news->title}} <span class="badge">{{count($news->comments)}}</span></a></h3></li>
            @endforeach
        </ul>
        </div>
    </div>
    <div class="col-md-7 col-sm-7 col-xs-12 gutter">

        <div class="sales report">
            <h2>Last users Registered</h2>
<table class="table table-striped">
   <thead>
     <tr>
         <th>Nom</th>
         <th>Email</th>
         <th>Admin</th>
         <th>View Profile</th>
     </tr>
   </thead>
   <tbody>
       @foreach($user as $user)
       <tr>
           <td>{{$user->name}}</td>
           <td>{{$user->email}}</td>
           <td>{{ $user->admin ? 'Administrateur' : 'Joueur'}}</td>
           <td><a href="{{URL::asset('profile/'.$user->id)}}"<i class="fa fa-user-circle-o" aria-hidden="true"></i></td>
       </tr>
       @endforeach
   </tbody>
 </table>
        </div>
    </div>
</div>
</div>
@endsection
