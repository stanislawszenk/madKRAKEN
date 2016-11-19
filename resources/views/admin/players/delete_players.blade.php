<table class="table table-striped">
        <thead>
            <tr>
                <th>Player Name</th>
                <th>Delete?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $p)
            <tr>
                <td>{{ $p->nickname }}</td>
                <td><a data-toggle="modal" data-target="#myModal-{{ $p->id }}"><i style="color:red; text-decoration:none;" class="fa fa-window-close" aria-hidden="true"></i></a></td>
            </tr>
            <div class="modal fade" id="myModal-{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Delete Player</h4>
                  </div>
                  <div class="modal-body">
                    Would you really want to delete "{{$p->nickname}}" ?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    <form action="{{ action('AdminPlayerController@destroy', $p) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </tbody>
</table>
