@extends('employee.index')
@section('title', '| Login page')
@section('content')

<div class="panel panel-success" style="width: 50%; margin-left: 25%">
      <div class="panel-heading">
            <h3 class="panel-title" style="text-align: center;"></h3>
      </div>
      <div class="panel-body">
            <form action="#" method="POST" role="form">
                @csrf
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter your email address">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password"  placeholder="Enter your password">
                </div>
                <div class="submit" style="text-align: center">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
            
      </div>
</div>

@endsection