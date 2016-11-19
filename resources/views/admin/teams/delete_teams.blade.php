<table class="table table-striped">
        <thead>
            <tr>
                <th>Team Name</th>
                <th>Delete?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $t)
            <tr>
                <td>{{ $t->name }}</td>
                <td><a data-toggle="modal" data-target="#myModal-{{ $t->id }}"><i style="color:red; text-decoration:none;" class="fa fa-window-close" aria-hidden="true"></i></a></td>
            </tr>
            <div class="modal fade" id="myModal-{{$t->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Delete Team</h4>
                  </div>
                  <div class="modal-body">
                    Would you really want to delete "{{$t->name}}" ?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    <form action="{{ action('AdminTeamController@destroy', $t) }}" method="POST">
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
