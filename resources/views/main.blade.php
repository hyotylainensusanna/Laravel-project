<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Category</title>


    <!-- jQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">

    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!--stylesheets-->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />

</head>
<body>
<nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if (Route::has('login'))
                @if (Auth::guest())
                    <li><a href="/login">Login</a></li>
                    <li><a href="/posts">All posts</a></li>
                    @elseif(Gate::allows('admin'))
                        <li><a href="/login">Your profile</a></li>
                        <li><a href="/posts">Admin panel</a></li>
                        @else
                    <li><a href="/login">Your profile</a></li>
                    <li><a href="/posts">Edit and view posts</a></li>
                @endif
            @endif
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
<div class="container-fluid">
    @yield('content')
</div>
<footer class="text-center">
    <h2><span class="strong">Web Development 3</span></h2><h2>Fontys University of Applied Sciences</h2>
    <p>Susanna Hyötyläinen ja Jenna Ahokas</p>
</footer>
</body>
</html>