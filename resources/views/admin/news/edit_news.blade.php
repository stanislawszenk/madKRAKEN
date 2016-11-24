<h2>News Editing</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Edit?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->author }}</td>
                <td><a href="#" data-toggle="modal" data-target="#modal-edit-news" class="ajaxModal" urldata="/admin/edit-news/{{ $post->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            </tr>
            @endforeach
                            <div class="modal fade" id="modal-edit-news" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div id="modal-edit-news-content" class="modal-content">
                                    </div>
                                </div>
                            </div>
                        </div>
        </tbody>
    </table>
