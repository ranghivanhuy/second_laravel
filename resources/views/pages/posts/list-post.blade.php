@extends('layouts.dashboard')
@section('title', '| List post page')
@section('content')

<div class="list-post">
<table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Post Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $post)
            <tr>
                <td><input type="checkbox" name="delid[]" value="{{$post->id}}"></td>
                <td>{{$post->id}}</td>
                <td> <a href="{{route('posts.show', $post->id)}}">{{$post->name}}</a></td>
                <td>{{$post->description}}</td>
                <td>
                    <div>
                        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-warning">Edit</a>
                    </div>
                    <form action="{{ route('posts.destroy', $post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- <button class="btn btn-danger" type="submit">Delete</button> -->
    <div class="text-center">
        {{$data->render('vendor.pagination.bootstrap-4')}}
        <!-- {{$data->links()}} -->
    </div>
</div>
    

@endsection