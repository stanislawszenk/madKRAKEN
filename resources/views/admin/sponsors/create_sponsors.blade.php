{!! Form::open(array('action' => 'SponsorsController@store', 'class' => 'form', 'files' => true)) !!}
<div class="form-group">
    {!! Form::label('Sponsor Name') !!}
    {!! Form::text('name', null,
                    array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Sponsor name')) !!}
</div>
<div class="form-group">
    {!! Form::label('Sponsor Link') !!}
    {!! Form::text('link', null,
                    array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Sponsor link')) !!}
</div>
<div class="form-group">
                        {!! Form::label('Description') !!}
                        {!! Form::textarea('description', null,
                            array('class'=>'form-control myTextarea',
                                  'placeholder'=>'content')) !!}
</div>

<div class="form-group">
    {!! Form::label('Images') !!}
    {!! Form::file('images', null,
                    array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Images')) !!}
</div>

<div class="form-group">
{!! Form::submit('Create Sponsors.',
                 array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
