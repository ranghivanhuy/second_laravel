@extends('master')
@section('title', '| Register page')
@section('content')


<div class="panel panel-info" style="width: 50%; margin-left: 25%">
      <div class="panel-heading">
            <h3 class="panel-title" style="text-align: center">REGISTER FORM</h3>
      </div>
      <div class="panel-body">
            <form action="{{route('postRegister')}}" method="POST" role="form">
            @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                    @error('name')
                    <div class="error" style="color:red;">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter your email address">
                    @error('email')
                    <div class="error" style="color:red;">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                    @error('password')
                    <div class="error" style="color:red;">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Password Confirm</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Enter your password Confirm">
                    @error('password_confirmation')
                    <div class="error" style="color:red;">{{$message}}</div>
                    @enderror
                </div>
                <div class="submit" style="text-align:center">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
                
            </form>
            
      </div>
</div>


@endsection