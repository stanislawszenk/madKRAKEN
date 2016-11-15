<div class="modal-header"><div class="alert alert-info">
Edit Sponsors <strong>{{$sponsors->name}}</strong>
</div></div>
                <div class="panel-body">
                    {!! Form::model($id, ['files' => true, 'url' => action("SponsorsController@update", $id), 'method' => 'update' == "store" ? "Post" : "Put"]) !!}

                    <div class="form-group">
                        {!! Form::label('Sponsors Name') !!}
                        {!! Form::text('name', "$sponsors->name",
                            array('required',
                                  'class'=>'form-control')) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Sponsors link') !!}
                        {!! Form::text('link', "$sponsors->link",
                            array('required',
                                  'class'=>'form-control')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Description') !!}
                        {!! Form::textarea('description', "$sponsors->description",
                            array('',
                                  'class'=>'form-control myTextarea')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Images') !!}
                        {!! Form::file('images',
                            array('required')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Update News.',
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
