<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{route('dashboard')}}">Dashboard</a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('posts.index')}}">List post</a></li>
            <li><a href="{{route('posts.create')}}">Add post</a></li>
            <li><a href="{{route('logout')}}">Logout</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>