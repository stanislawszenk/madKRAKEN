<h2>News Deleting</h2>
<table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Delete?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->author }}</td>
                <td><a data-toggle="modal" data-target="#myModal-{{ $post->id }}"><i style="color:red; text-decoration:none;" class="fa fa-window-close" aria-hidden="true"></i></a></td>
            </tr>
            <div class="modal fade" id="myModal-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Delete News</h4>
                  </div>
                  <div class="modal-body">
                    Would you really want to delete "{{$post->title}}" ?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    <a href="/admin/delete-news/{{ $post->id }}" class="btn btn-danger">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </tbody>
</table>
