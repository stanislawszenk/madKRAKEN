<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
    <div class="row">
    @foreach($news as $post)
        <div class="news">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 news">
                <div class="hovereffect">
                    <img src="{{$post->images}}" alt="{{$post->title}}" class="img-responsive" />
                    <div class="overlay">
                        <span class="text-center">
                    <h2>{{ $post->title }}</h2></span>
                        <div class="caption_news">
                            {!! str_limit($post->resume, $limit=200, $end='...') !!} <br/>
                        </div>
                        <a class="info" href="/news/show/{{ $post->id }}-{{ $post->slug }}"><b>+</b></a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
