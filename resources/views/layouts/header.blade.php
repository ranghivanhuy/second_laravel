
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('home')}}">Laravel</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <form action="{{ route('switchLang') }}" class="form-lang" method="post">
                    <select class="form-control" name="locale" onchange='this.form.submit();'>
                        <option class="form-control" value="en">{{ trans('message.lang.en') }}</option>
                        <option class="form-control" value="vi"{{ Lang::locale() === 'vi' ? 'selected' : '' }}>{{ trans('message.lang.vi') }}</option>
                    </select>
                    {{ csrf_field() }}
                </form>
            </li>
            <li><a href="{{route('getLogin')}}">{{ Lang::get('message.login') }}</a></li>
            <li class="dropdown">
                <a href="{{route('getRegister')}}">{{ Lang::get('message.register') }}</a>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
