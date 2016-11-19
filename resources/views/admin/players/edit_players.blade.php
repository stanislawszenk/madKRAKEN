<table class="table table-striped">
        <thead>
            <tr>
                <th>Nickname</th>
                <th>Team ID</th>
                <th>Edit?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $p)
            <tr>
                <td>{{ $p->nickname }}</td>

                <td>{{ $p->id_team }}</td>
                <td><a href="#" data-toggle="modal" data-target="#modal-edit-news" class="ajaxModal" urldata="/admin/teams/playersManagement/{{ $p->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                <div class="modal fade" id="modal-edit-news" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div id="modal-edit-news-content" class="modal-content"></div>
                    </div>
                </div>
            </tr>
            @endforeach
        </tbody>
    </table>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>Team ID</th>
                    <th>Team Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $t)
                <tr>
                    <td>{{ $t->id }}</td>
                    <td>{{ $t->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
