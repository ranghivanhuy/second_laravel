@extends('layouts.dashboard')
@section('title', ' | Edit post page')
@section('content')


<div class="panel panel-warning">
      <div class="panel-heading">
            <h3 class="panel-title">EDIT POSST</h3>
      </div>
      <div class="panel-body">
            <form action="" method="POST" role="form" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="">Post Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name post">
                </div>
                <div class="form-group">
                    <label for="">Post Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="">Post Description</label>
                    <input type="text" class="form-control" name="description" placeholder="Enter description">
                </div>
                <button type="submit" class="btn btn-warning">EDIT</button>
            </form>
      </div>
</div>




@endsection