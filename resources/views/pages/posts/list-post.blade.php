@extends('layouts.dashboard')
@section('title', '| List post page')
@section('content')

<div class="list-post">
    
    <form action="{{route('search')}}" method="get" class="form-horizontal" role="form">
            <div class="form-group">
                <div class="col-sm-3 col-sm-offset-9">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </span>
                    </div>
                    @if(session('mess'))
                        <div class="error" style="color: red">{{session('mess')}}</div>
                    @endif
                    @if(session('mesg'))
                        <div class="error" style="color: red;">{{session('mesg')}}</div>
                     @endif
                </div>
            </div>
    </form>
    <form action="{{ url('posts/delete') }}" method="post">
        @csrf
        @method('DELETE')
        @if(session('msg'))
            <div class="error" style="color:red">{{session('msg')}}</div>
        @endif
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
            @if(isset($data))
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
                    </td>
                </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <button class="btn btn-danger" type="submit">Delete</button>
        <div class="text-center">
            {{$data->render('vendor.pagination.bootstrap-4')}}
        </div>
    </form>
</div>
    
@endsection