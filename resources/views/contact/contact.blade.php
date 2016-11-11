@extends('layouts.master')

@section('content')
        <div class="sponsors_princ">Contact US</div>
<div class="contact">
    <div class="row">
    <div class="col-lg-12">
        <div class="col-lg-8">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>

            @if(Session::has('message'))
            <div class="alert alert-info">
                {{Session::get('message')}}
            </div>
            @endif

            {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}
            <div class="form-group">
                <label for="name" class="col-md-2 control-label">Name</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    {!! Form::text('name', null,
                    array('required',
                    'class'=>'form-control',
                    'id'=>'name',
                    'placeholder'=>'Your name')) !!}
                </div>
            </div>
            <div class="form-group">
                <label for="subject" class="col-md-2 control-label">Subject</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    {!! Form::text('subject', null,
                    array('required',
                    'class'=>'form-control',
                    'id'=>'subject',
                    'placeholder'=>'Subject')) !!}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-2 control-label">E-Mail</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    {!! Form::text('email', null,
                    array('required',
                    'class'=>'form-control',
                    'id'=>'email',
                    'placeholder'=>'E-mail')) !!}
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="col-md-2 control-label">Message</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                    {!! Form::textarea('message', null,
                    array('required',
                    'class'=>'form-control',
                    'id'=>'message',
                    'style'=>'height: 100px;',
                    'placeholder'=>'Message')) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::submit('Contact Us!',
                array('class'=>'btn btn-primary')) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-lg-4">
            <h1>OTHER CONTACT</h1>
            <p>General Contact:</p>
            <p><a href="mailto:contact@madkraken-esc.com" target="_BLANK">contact@madkraken-esc.com</a></p>
            <p>Partnership</p>
            <p><a href="mailto:hujino@madkraken-esc.com" target="_BLANK">hujino@madkraken-esc.com</a></p>
            <p>Website Issues</p>
            <p><a href="mailto:website@madkraken-esc.com" target="_BLANK">website@madkraken-esc.com</a></p>
        </div>
    </div>
</div>
</div>
@endsection
