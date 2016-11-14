
                    {!! Form::open(array('route' => 'news_store', 'class' => 'form', 'files' => true)) !!}

                    <div class="form-group">
                        {!! Form::label('News Title') !!}
                        {!! Form::text('title', null,
                            array('required',
                                  'class'=>'form-control',
                                  'placeholder'=>'News Title')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Content') !!}
                        {!! Form::textarea('content', null,
                            array('',
                                  'class'=>'form-control myTextarea',
                                  'placeholder'=>'content')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('Images Link') !!}
                        {!! Form::file('images', null,
                            array('required',
                                  'class'=>'form-control',
                                  'placeholder'=>'The link of the images')) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Create News.',
                          array('class'=>'btn btn-primary')) !!}
                    </div>
                    {!! Form::close() !!}
