@extends('employee')
@section('title', 'Register page')
@section('content')

<div class="panel panel-info" style="width: 50%; margin-left: 25%">
      <div class="panel-heading">
            <h3 class="panel-title" style="text-align: center">{{ Lang::get('message.register') }}</h3>
      </div>
      <div class="panel-body">
            <form action="#" method="POST" role="form">
            @csrf
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" class="form-control" name="fullname" value="{{old('fullname')}}" placeholder="Enter your Full Name">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter your Email Address">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="">Password Confirm</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Enter your confirm password">
                </div>
                <div class="submit" style="text-align:center">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </form>
            
      </div>
</div>

@endsection