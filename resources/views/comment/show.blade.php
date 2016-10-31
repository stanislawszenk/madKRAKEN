@if(count($comment) > 1))
<article class="blog">
    <h2>Commentaire</h2>
    @foreach($comment as $com)
    <div class="col-lg-2"><img src="{{ asset($com->avatar) }}" class="img-responsive"/></div>
    <div class="col-lg-8">{{$com->name}}
        <p>{{$com->message}}</p>
    </div>
    <div class="clearfix"></div>
    <hr />
    @endforeach
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    @if(Auth::guest())
    You should be logged to post comments.
    @else
    {!! Form::open(array('route' => 'comment_post', 'class' => 'form', 'id' => 'formulaire')) !!}

    <div class="form-group">
        {!! Form::label('Message') !!}
        {!! Form::textarea('message', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your message')) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Post your comment!',
          array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::hidden('news_id', $post->id) !!}
    {!! Form::close() !!}
    @endif
</article>
@else
<article class="blog">
    <h2>No comments?</h2>
    <h3>You want to post?</h3>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>


    @if(Auth::guest())
    You should be logged to post comments.
    @else
    {!! Form::open(array('route' => 'comment_post', 'class' => 'form', 'id' => 'formulaire')) !!}

    <div class="form-group">
        {!! Form::label('Message') !!}
        {!! Form::textarea('message', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your message')) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Post your comment!',
          array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::hidden('news_id', $post->id) !!}
    {!! Form::close() !!}
    @endif
</article>
@endif
