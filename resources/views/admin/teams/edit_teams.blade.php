<table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Edit?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teams as $t)
            <tr>
                <td>{{ $t->name }}</td>
                <td><a href="#" data-toggle="modal" data-target="#modal-edit-team" class="ajaxModal" urldata="/admin/teams/teamsManagement/{{ $t->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                <div class="modal fade" id="modal-edit-team" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div id="modal-edit-team-content" class="modal-content"></div>
                    </div>
                </div>
            </tr>
            @endforeach
        </tbody>
    </table>
