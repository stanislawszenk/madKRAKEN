<div class="modal-header"><div class="alert alert-info">
Edit Team <strong>{{$team->name}}</strong>
</div></div>
                <div class="panel-body">
                    {!! Form::model($id, ['files' => true, 'url' => action("AdminTeamController@update", $id), 'method' => 'update' == "store" ? "Post" : "Put"]) !!}
                    <div class="form-group">
                        {!! Form::label('Team Name') !!}
                        {!! Form::text('name', "$team->name",
                            array('required',
                                  'class'=>'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Images') !!}
                        {!! Form::file('images',
                            array('required')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Update Team.',
                          array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
<script>
$(".ajaxModal").click(function()
{
    if(xhr2 !== false)
    {
        xhr2.abort();
        xhr2 = false;
    }

    ajaxModal(this);
});
</script>
