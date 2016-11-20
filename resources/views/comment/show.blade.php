@if(count($comment) >= 1)
<article class="blog">
    <h2>Commentaire</h2>
    @if (session('message'))
       <div class="alert alert-success">
           {{ session('message') }} <i class="fa fa-check-circle-o fa-lg" aria-hidden="true"></i>
       </div>
   @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }} <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></li>
                @endforeach
            </ul>
        </div>
    @endif
    @foreach($comment as $com)
    <div class="row">
    <div class="col-lg-2"><img src="{{ asset($com->avatar) }}" class="img-responsive"/></div>
    <div class="col-lg-8">{{$com->name}}
        <p><time datetime="{{ $com->created_at }}">{{ date('F d, Y H:i:s', strtotime($com->created_at)) }}</time></p>
        <p>{{$com->message}}</p>
    </div>
    <div class="col-lg-2">
        @if(Auth::check())
        @if($com->user_id == Auth::user()->id || Auth::user()->admin == 1 )
        <form action="{{ action('CommentController@destroy', $com->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button style="color:red; text-decoration:none; background: none; border: none;" class="fa fa-times" aria-hidden="true"></a>
        </form>
        <a href="#" data-toggle="modal" data-target="#modal-edit-comment" class="ajaxModal" urldata="{{URL::asset('comment/'.$com->id.'/edit')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        <div class="modal fade" id="modal-edit-comment" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div id="modal-edit-comment-content" class="modal-content"></div>
            </div>
        </div>
        @endif
        @endif
    </div>
</div>
    <hr />
    @endforeach
    {{ $comment->links() }}
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    @if(Auth::guest())
    You should be logged to post comments.
    @else
{!! Form::open(array('action' => 'CommentController@store', 'class' => 'form')) !!}

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
    {!! Form::open(array('action' => 'CommentController@store', 'class' => 'form')) !!}

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
