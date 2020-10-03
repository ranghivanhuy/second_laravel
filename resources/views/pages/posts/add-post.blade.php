@extends('layouts.dashboard')
@section('title', '| View post page')
@section('content')
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">ADD NEW POST</h3>
    </div>
    <div class="panel-body">
        <form action="{{route('posts.store')}}" onsubmit="return ValidateAdd()"
        id="addPostForm" name="addPostForm" method="POST" role="form" enctype="multipart/form-data">
        @method('POST')
        @csrf
            <div class="form-group">
                <label for="">Post Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter name" value="{{old('name')}}">
            <div class="form-group">
                <label for="">Post Description</label>
                <textarea type="text" id="description" name="description" class="form-control"  placeholder="Enter description">{{old('description')}}</textarea>
            </div>
            <div class="btn-submit">
                <button type="submit" id="save-add-post" class="btn btn-success">ADD</button>
                <a href="{{route('posts.index')}}" class="btn btn-primary">CANCEL</a>
            </div>
            <div class="val_error">
                <div class="val_error" id="name_error"></div>
                <div class="val_error" id="description_error"></div>
            </div>
        </form>
    </div>
</div>
@endsection