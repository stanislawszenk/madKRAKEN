@extends('layouts.master')

@section('content')

  <div class="col-lg-12">
      <div class="row">
   <div class="abouts">
    <p style="width: 90%; padding: 20px;">
                  <img src="{{asset('/images/full_logo.png')}}" alt="madKRAKEN" class="img-responsive" style="float:left; left:0" width='25%'/>
       <strong>madKRAKEN Esports Club</strong> is a non-profit association operating under french law 1901.
       Our objective is to promote electronic sports (eSports), be it on amateur or professional level,
        in France and the rest of Europe.
        We are a group of volunteers and none paid professionals and who all share a common passion which is eSports!
         Everyone within <strong>madKRAKEN Esports Club</strong> puts in their best effort and skills to run a community of great people who play on a variety of platforms,
          different games and participate in numerous tournaments.

       Became interested in <strong>madKRAKEN eSports Club</strong>?
       Don't hesitate to contact us if you would like to know more, to join us or if you are up for a skrim!
       <a href="{{URL::asset('/contact')}}" class="btn btn-primary">Contact us here!</a></p>
   </div>
   </div>
  </div>

@endsection
