@extends('layouts.dashboard')
@section('title', '| View post page')
@section('content')
<div class="panel panel-warning">
    <div class="panel-heading">
        <h3 class="panel-title">EDIT POSST</h3>
    </div>
    <div class="panel-body">
        <form action="{{route('posts.update', $posts->id)}}" onsubmit="return ValidateEdit()"
            method="POST" role="form" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                
            <div class="form-group">
                <label for="">Post Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter name" value="{{$posts->name}}">
            </div>
            <div class="form-group">
                <label for="">Post Description</label>
                <textarea type="text" id="description" name="description" class="form-control" placeholder="Enter description">{{$posts->description}}</textarea>
            </div>
            <div class="btn-submit">
                <button type="submit" class="btn btn-warning">EDIT</button>
                <a href="{{route('posts.index')}}" class="btn btn-primary">CANCEL</a>
            </div>
                <div class="val_error" id="name_error"></div>
                <div class="val_error" id="description_error"></div>
            </div>
        </form>
    </div>
</div>
@endsection