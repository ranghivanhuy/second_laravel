@extends('master')
@section('title', ' | Login page')
@section('content')


<div class="panel panel-success" style="width: 50%; margin-left: 25%">
      <div class="panel-heading">
            <h3 class="panel-title" style="text-align: center;">{{ Lang::get('message.login') }}</h3>
      </div>
      <div class="panel-body">
            
            <form action="{{route('postLogin')}}" method="POST" role="form">
                @csrf
                @if(session('message'))
                <div class="error" style="color:red">{{session('message')}}</div>
                @endif
                <div class="form-group">
                    <label for="">{{ Lang::get('message.email') }}</label>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="{{ Lang::get('message.email_placeholder') }}">
                </div>
                @error('email')
                <div class="error" style="color:red;">{{$message}}</div>
                @enderror
                <div class="form-group">
                    <label for="">{{ Lang::get('message.password') }}</label>
                    <input type="password" class="form-control" name="password"  placeholder="{{ Lang::get('message.pass_placeholder') }}">
                </div>
                @error('password')
                <div class="error" style="color:red;">{{$message}}</div>
                @enderror
                <div class="submit" style="text-align: center">
                    <button type="submit" class="btn btn-success">{{ Lang::get('message.submit') }}</button>
                </div>
            </form>
            
      </div>
</div>

@endsection