@extends('layouts.dashboard')
@section('title', '| View post page')
@section('content')

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Post Name</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$posts->id}}</td>
            <td>{{$posts->name}}</td>
            <td>{{$posts->description}}</td>
        </tr>
    </tbody>
</table>

@endsection