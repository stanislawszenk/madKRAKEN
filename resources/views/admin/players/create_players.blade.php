{!! Form::open(array('action' => 'AdminPlayerController@store', 'class' => 'form', 'files' => true)) !!}
<div class="form-group">
    {!! Form::label('Player firstname') !!}
    {!! Form::text('firstname', null,
                    array('class'=>'form-control',
                    'placeholder'=>'Player firstname')
                    ) !!}
</div>
<div class="form-group">
    {!! Form::label('Player Name') !!}
    {!! Form::text('name', null,
                    array('class'=>'form-control',
                    'placeholder'=>'Player name')) !!}
</div>
<div class="form-group">
    {!! Form::label('Player Nickname') !!}
    {!! Form::text('nickname', null,
                    array('class'=>'form-control',
                    'placeholder'=>'Player nickname')) !!}
</div>
<div class="form-group">
    {!! Form::label('Description') !!}
    {!! Form::textarea('description', null,
                    array('class'=>'form-control',
                    'placeholder'=>'Player Description')) !!}
</div>
<div class="form-group">
    {!! Form::label('Images') !!}
    {!! Form::file('images', null,
                    array('class'=>'form-control',
                    'placeholder'=>'Images')) !!}
</div>
<div class="form-group">
{!! Form::label('Team') !!}
<select name="id_team">
@foreach($teams as $t)
 <option value="{{$t->id}}">{{$t->name}}</option>
 @endforeach
</select>
</div>
<div class="form-group">
{!! Form::submit('Create Player.',
                 array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
