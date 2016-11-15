@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="sponsors_princ">Our Sponsors</div>
        @foreach($sponsors as $sponsor)
        <div class="sponsors_in">
            <div class="col-md-12">
                <div class="col-md-3"><a href="{{ $sponsor->link }}" target="_blank"> <img src="{{ $sponsor->images }}" ALT="{{ $sponsor->name }}" class="img-responsive sponsors_in"> </a></div>
                <div class="col-md-9 text-center"><p> {!! $sponsor->description !!} </p></div>
            </div>
            <div class="clearfix"></div>
        </div>
        @endforeach
    </div>
@endsection
