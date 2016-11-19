<h2>Sponsors Deleting</h2>
<table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Delete?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sponsors as $sponsor)
            <tr>
                <td>{{ $sponsor->name }}</td>
                <td>{{ $sponsor->link }}</td>
                <td><form action="{{ action('SponsorsController@destroy', $sponsor) }}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button class="btn btn-danger btn-primary"><i class="fa fa-window-close" aria-hidden="true"></i></button>
</form></td>
            </tr>
            @endforeach
        </tbody>
</table>
