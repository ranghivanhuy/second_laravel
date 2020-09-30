@extends('layouts.dashboard')
@section('title', ' | Edit post page')
@section('content')


<div class="panel panel-warning">
      <div class="panel-heading">
            <h3 class="panel-title">EDIT POSST</h3>
      </div>
      <div class="panel-body">
            <form action="{{route('posts.update', $posts->id)}}" method="POST" role="form" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                <div class="form-group">
                    <label for="">Post Name</label>
                    <input type="text" class="form-control" name="name" value="{{$posts->name}}" placeholder="Enter name post">
                </div>
                <div class="form-group">
                    <label for="">Post Description</label>
                    <input type="text" class="form-control" name="description" value="{{$posts->description}}" placeholder="Enter description">
                </div>
                <button type="submit" class="btn btn-warning">EDIT</button>
                <a href="{{route('posts.index')}}" class="btn btn-primary">CANCEL</a>
            </form>
      </div>
</div>




@endsection