{!! Form::open(array('action' => 'AdminTeamController@store', 'class' => 'form', 'files' => true)) !!}
<div class="form-group">
    {!! Form::label('Team Name') !!}
    {!! Form::text('name', null,
                    array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Team name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Images') !!}
    {!! Form::file('images', null,
                    array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Images')) !!}
</div>

<div class="form-group">
{!! Form::submit('Create Team.',
                 array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
