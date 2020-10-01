@extends('layouts.dashboard')
@section('title', '| List post page')
@section('content')

<div class="list-post">
    
    <form action="{{route('posts.search')}}" method="get" class="form-horizontal" role="form">
            <div class="form-group">
                <div class="col-sm-3 col-sm-offset-9">
                    <div class="input-group">
                    @if(isset($search))
                        <input type="search" name="search" class="form-control" value="{{$search}}">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </span>
                    @else
                        <input type="search" name="search" class="form-control" value="">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </span>
                    @endif
                        
                    </div>
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
                    <th>No</th>
                    <th>Post Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @if(isset($data))
                @if(count($data) > 0)   
                @foreach($data as $post)
                <tr>
                    <td><input type="checkbox" name="delid[]" value="{{$post->id}}"></td>
                    <td>{{$num++}}</td>
                    <td> <a href="{{route('posts.show', $post->id)}}">{{$post->name}}</a></td>
                    <td>{{$post->description}}</td>
                    <td>
                        <div>
                            <a href="{{route('posts.edit', $post->id)}}" 
                            class="btn btn-warning" data-toggle="modal" data-target="#myModal">Edit</a>
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="5" style="text-align: center; color:red; font-size: 20px">"{{$search}}" not found.</td>
                </tr>
                @endif
            @else
                <tr>
                    <td colspan="5" style="text-align: center; color:red; font-size: 20px">Sorry...You have must type to search.</td>
                </tr>
            @endif
            </tbody>
        </table>
        <button class="btn btn-danger" onclick="confirm('Are you sure you want to delete?')" type="submit">Delete</button>
        <div class="text-center">
            {{$data->render('vendor.pagination.bootstrap-4')}}
        </div>
    </form>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        
      </div>
    </div>
  </div>
@endsection