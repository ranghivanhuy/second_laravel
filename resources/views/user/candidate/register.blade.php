@extends('user.master')
@section('title', 'Register page')
@section('content')

<div class="container">
    <div class="row">
        <div class="register-candidate">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ Lang::get('message.aplly_register') }}</h3>
                </div>
                <div class="panel-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="inputEmail4">{{ Lang::get('message.fullname') }}</label>
                            <input type="text" class="form-control" id="fullname" placeholder="{{ Lang::get('message.fullname_placeholder') }}">
                        </div>
                        <div class="form-group">
                            <label for="">{{ Lang::get('message.dob') }}</label>
                            <input type="date" data-date-format="dd/mm/yyyy" name="dob" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">{{ Lang::get('message.address') }}</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="{{ Lang::get('message.address_placeholder') }}">
                        </div>
                        <div class="form-group">
                            <label for="">{{ Lang::get('message.phone') }}</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="{{ Lang::get('message.phone_placeholder') }}">
                        </div>
                        <div class="form-group">
                            <label for="">{{ Lang::get('message.position') }}</label>
                            <textarea class="form-control" name="position" id="position" placeholder="{{ Lang::get('message.position_placeholder') }}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">{{ Lang::get('message.languages') }}</label>
                            <textarea class="form-control" name="language" id="language" placeholder="{{ Lang::get('message.languages_placeholder') }}"></textarea>                        
                        </div>
                        <div class="form-group">
                            <label for="">{{ Lang::get('message.technical') }}</label>
                            <textarea class="form-control" name="technical" id="technical" placeholder="{{ Lang::get('message.tecnical_placeholder') }}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">{{ Lang::get('message.achievement') }}</label>
                            <textarea class="form-control" name="achievement" id="achievement" placeholder="{{ Lang::get('message.achievement_placeholder') }}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">{{ Lang::get('message.specialskill') }} skills</label>
                            <textarea class="form-control" name="special_skill" id="special_skill" placeholder="{{ Lang::get('message.specialskill_placeholder') }}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">{{ Lang::get('message.purpose6month') }}</label>
                            <textarea class="form-control" name="purpose6month" id="purpose6month" placeholder="{{ Lang::get('message.purpose6month_placeholder') }}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">{{ Lang::get('message.purpose1year') }}</label>
                            <textarea class="form-control" name="purpose1year" id="purpose1year" placeholder="{{ Lang::get('message.purpose1year_placeholder') }}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">{{ Lang::get('message.purpose3year') }}</label>
                            <textarea class="form-control" name="purpose3year" id="purpose3year" placeholder="{{ Lang::get('message.purpose3year_placeholder') }}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">{{ Lang::get('message.project') }}</label>
                            <textarea class="form-control" name="project" id="project" placeholder="{{ Lang::get('message.project_placeholder') }}" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">{{ Lang::get('message.income') }}</label>
                            <input type="text" class="form-control" name="income" id="income" placeholder="{{ Lang::get('message.income_placeholder') }}">
                        </div>
                        <div class="form-group">
                            <label for="">CV attach</label>
                            <input type="file" class="form-control" name="file_cv" id="file_cv">
                        </div>
                        <div class="form-group">
                            <label for="">{{ Lang::get('message.email') }}</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="{{ Lang::get('message.email_placeholder') }}">
                        </div>
                        <div class="submit-btn">
                            <button type="submit" class="btn btn-primary">{{ Lang::get('message.submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection