@extends('layouts.dashboard')
@section('title', '| List post page')
@section('content')

<div class="list-post">
    <div class="add-post-btn">
        <a id="btn_add" name="btn_add" class="btn btn-success">Add</a>
    </div>
    <p class="msg-success"></p>
    <form action="{{route('posts.search')}}" method="get" class="form-horizontal" role="form">
            <div class="form-group">
                <div class="col-sm-3 col-sm-offset-9">
                    <div class="input-group">
                    @if(isset($search))
                        <input type="search" name="search" id="search" class="form-control" value="{{$search}}">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    @else
                        <input type="search" name="search" class="form-control" value="">
                        <span class="input-group-btn">`
                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    @endif
                        
                    </div>
                </div>
            </div>
    </form>
    <form action="{{ url('posts/delete') }}" method="post">
        @csrf
        @method('DELETE')
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
            <tbody id="posts-list" name="posts-list">
            @if(isset($data))
                @if(count($data) > 0)   
                @foreach($data as $key => $post)
                <tr  id = "post-{{$post->id}}">
                    <td><input type="checkbox" name="delid[]" value="{{$post->id}}"></td>
                    <td class = "number-row">{{ ($data->currentpage() - 1) * $data->perpage() + ++$key }}</td>
                    <td> <a data-id="{{$post->id}}" class="open_modal-view">{{$post->name}}</a></td>
                    <td>{{$post->description}}</td>
                    <td>
                        <div>
                            <a class="btn btn-warning btn-detail open_modal" value="{{$post->id}}" data-id="{{$post->id}}">
                                <span class="glyphicon glyphicon-edit"></span>
                            </a>
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
        <button class="btn btn-danger" onclick="confirm('Are you sure you want to delete?')" type="submit">
            <span class="glyphicon glyphicon-trash"></span>
        </button>
            @if(session('msg'))
            <div class="error" style="color:red">{{session('msg')}}</div>
            @endif
        <div class="text-center">
            {{$data->render('vendor.pagination.bootstrap-4')}}
        </div>
    </form>
</div>
@include('pages.posts.modal-post')
@endsection