<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Laravel</a>
    </div>

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
        </ul>
    </div>
</nav>
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>