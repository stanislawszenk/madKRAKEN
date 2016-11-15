<h2>Sponsors Editing</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Link</th>
                <th>Edit?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sponsors as $sp)
            <tr>
                <td>{{ $sp->name }}</td>
                <td>{{ $sp->link }}</td>
                <td><a href="#" data-toggle="modal" data-target="#modal-edit-news" class="ajaxModal" urldata="/admin/spons/{{ $sp->id }}/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                <div class="modal fade" id="modal-edit-news" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div id="modal-edit-news-content" class="modal-content"></div>
                    </div>
                </div>
            </tr>
            @endforeach
        </tbody>
    </table>
