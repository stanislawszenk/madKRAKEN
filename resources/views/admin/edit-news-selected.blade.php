@extends('layouts.app')

@section('content')

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create News</div>
                <div class="panel-body">
                    {!! Form::open(array('route' => 'news_store', 'class' => 'form')) !!}

                    <div class="form-group">
                        {!! Form::label('News Title') !!}
                        {!! Form::text('title', "$post->title",
                            array('required',
                                  'class'=>'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Content') !!}
                        {!! Form::textarea('content', "$post->content",
                            array('',
                                  'class'=>'form-control myTextarea')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Images Link') !!}
                        {!! Form::text('images', $post->images,
                            array('required',
                                  'class'=>'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Update News.',
                          array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                    @if(Session::has('message'))
                        <div class="alert alert-info">
                          {{Session::get('message')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
