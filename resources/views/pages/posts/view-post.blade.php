@extends('layouts.dashboard')
@section('title', '| View post page')
@section('content')

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Post Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>asdasdas</td>
            <td>Image here</td>
            <td>asdasdaskdasdlasdasdjs</td>
            <td>Active</td>
            <td>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    </tbody>
</table>

@endsection