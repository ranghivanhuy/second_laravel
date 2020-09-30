@extends('master')
@section('title', ' | Login page')
@section('content')


<div class="panel panel-success" style="width: 50%; margin-left: 25%">
      <div class="panel-heading">
            <h3 class="panel-title" style="text-align: center;">LOGIN FORM</h3>
      </div>
      <div class="panel-body">
            
            <form action="{{route('postLogin')}}" method="POST" role="form">
                @csrf
                @if(session('message'))
                <div class="error" style="color:red">{{session('message')}}</div>
                @endif
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter your email address">
                </div>
                @error('email')
                <div class="error" style="color:red;">{{$message}}</div>
                @enderror
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                </div>
                @error('password')
                <div class="error" style="color:red;">{{$message}}</div>
                @enderror
                <div class="submit" style="text-align: center">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
            
      </div>
</div>

@endsection