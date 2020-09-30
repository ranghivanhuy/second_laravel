@extends('layouts.dashboard')
@section('title', 'Add post page')
@section('content')


<div class="panel panel-success">
      <div class="panel-heading">
            <h3 class="panel-title">ADD NEW POST</h3>
      </div>
      <div class="panel-body">
            <form action="{{route('posts.store')}}" method="POST" role="form" enctype="multipart/form-data">
            @method('POST')
            @csrf
                <div class="form-group">
                    <label for="">Post Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name post">
                    @error('name')
                    <div class="error" style="color:red;">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Post Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Enter description">
                    @error('description')
                    <div class="error" style="color:red;">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">ADD</button>
                <a href="{{route('posts.index')}}" class="btn btn-primary">CANCEL</a>
            </form>
      </div>
</div>


@endsection