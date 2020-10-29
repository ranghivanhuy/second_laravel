@extends('master')
@section('title', '| Register page')
@section('content')


<div class="panel panel-info" style="width: 50%; margin-left: 25%">
      <div class="panel-heading">
            <h3 class="panel-title" style="text-align: center">{{ Lang::get('message.register') }}</h3>
      </div>
      <div class="panel-body">
            <form action="{{route('postRegister')}}" method="POST" role="form">
            @csrf
                <div class="form-group">
                    <label for="">{{ Lang::get('message.name') }}</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="{{ Lang::get('message.name_placeholder') }}">
                    @error('name')
                    <div class="error" style="color:red;">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">{{ Lang::get('message.email') }}</label>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="{{ Lang::get('message.email_placeholder') }}">
                    @error('email')
                    <div class="error" style="color:red;">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">{{ Lang::get('message.password') }}</label>
                    <input type="password" class="form-control" name="password" placeholder="{{ Lang::get('message.pass_placeholder') }}">
                    @error('password')
                    <div class="error" style="color:red;">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">{{ Lang::get('message.pass_confirm') }}</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="{{ Lang::get('message.pass_confirm_placeholder') }}">
                    @error('password_confirmation')
                    <div class="error" style="color:red;">{{$message}}</div>
                    @enderror
                </div>
                <div class="submit" style="text-align:center">
                    <button type="submit" class="btn btn-info">{{ Lang::get('message.submit') }}</button>
                </div>
                
            </form>
            
      </div>
</div>


@endsection