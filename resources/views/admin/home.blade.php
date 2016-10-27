@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <ul>
                        <li><a href="admin/create-news">Create News</a></li>
                        <li><a href="admin/edit-news">Edit News</a></li>
                        <li><a href="admin/delete-news">Delete News</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
