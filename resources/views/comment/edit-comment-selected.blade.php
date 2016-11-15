<div class="panel-body">
    {!! Form::model($id, ['files' => true, 'url' => action("CommentController@update", $id), 'method' => 'update' == "store" ? "Post" : "Put"]) !!}

    <div class="form-group">
        {!! Form::label('Message') !!}
        {!! Form::textarea('message', "$comment->message",
            array('required',
                  'class'=>'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Post your comment!',
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
