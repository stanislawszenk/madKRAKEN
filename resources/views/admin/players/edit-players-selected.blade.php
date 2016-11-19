<div class="modal-header"><div class="alert alert-info">
Edit Player <strong>{{$players->name}}</strong> in <strong>{{$team->name}}</strong>
</div></div>
                <div class="panel-body">
                    {!! Form::model($id, ['files' => true, 'url' => action("AdminPlayerController@update", $id), 'method' => 'update' == "store" ? "Post" : "Put"]) !!}

                    <div class="form-group">
                        {!! Form::label('Player Name') !!}
                        {!! Form::text('name', $players->name,
                                        array('required',
                                        'class'=>'form-control',
                                        'placeholder'=>'Player name')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Player Nickname') !!}
                        {!! Form::text('nickname', $players->nickname,
                                        array('required',
                                        'class'=>'form-control',
                                        'placeholder'=>'Player nickname')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Player firstname') !!}
                        {!! Form::text('firstname', $players->firstname,
                                        array('required',
                                        'class'=>'form-control',
                                        'placeholder'=>'Player firstname')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Description') !!}
                        {!! Form::textarea('description', $players->description,
                                        array('required',
                                        'class'=>'form-control',
                                        'placeholder'=>'Player Description')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Images') !!}
                        {!! Form::file('images', null,
                                        array('required',
                                        'class'=>'form-control',
                                        'placeholder'=>'Images')) !!}
                        <img src="{{asset($players->images)}}" class="img-responsive img-circle" style="width: 25%" />
                    </div>
                    <div class="form-group">
                        {!! Form::label('Team') !!}
                    <select name="id_team">
                        <option value="{{$team->id}}" selected>{{$team->name}}</option>
                        <option>--------------</option>
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
                </div>
<script>
$(document).ready(function() {
tinymce.init({
selector: 'textarea',
theme: 'modern',
plugins: [
'advlist autolink lists link image charmap print preview hr anchor pagebreak',
'searchreplace wordcount visualblocks visualchars code fullscreen',
'insertdatetime media nonbreaking save table contextmenu directionality',
'emoticons template paste textcolor colorpicker textpattern imagetools'
],
toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
toolbar2: 'print preview media | forecolor backcolor emoticons',
image_advtab: true,
templates: [
{ title: 'Test template 1', content: 'Test 1' },
{ title: 'Test template 2', content: 'Test 2' }
],
content_css: [
'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
'//www.tinymce.com/css/codepen.min.css'
]
});
$(".ajaxModal").click(function()
{
    if(xhr2 !== false)
    {
        xhr2.abort();
        xhr2 = false;
    }

    ajaxModal(this);
});
});

</script>
