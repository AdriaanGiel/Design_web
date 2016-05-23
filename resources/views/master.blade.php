
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CodeTuts | @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/all.css')}}" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CodeTuts</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Tutorial <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Course</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">Articles</a></li>
                <li><a href="#">Skills</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
            </ul>
        </div>

        {{--<div id="navbar" class="navbar-collapse collapse">--}}
            {{--<form class="navbar-form navbar-right">--}}
                {{--<div class="form-group">--}}
                    {{--<input type="text" placeholder="Email" class="form-control">--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<input type="password" placeholder="Password" class="form-control">--}}
                {{--</div>--}}
                {{--<button type="submit" class="btn btn-success">Sign in</button>--}}
            {{--</form>--}}
        {{--</div><!--/.navbar-collapse -->--}}
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">

</div>

<div class="container">
    <!-- Example row of columns -->
    @yield('content')
</div> <!-- /container -->
<footer class="footer">
    <div class="container">
        <div class="text-muted">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <ul class="foot-ul">
                            <li><a href="">Blogs</a></li>
                            <li><a href="">Articles</a></li>
                            <li><a href="">Skills</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <ul class="foot-ul">
                            <li><a href="">About</a></li>
                            <li><a href="">Contact</a></li>

                        </ul>
                    </div>
                </div>
            </div>
                <div class="col-md-12 links">
                    <div class="col-md-4 col-md-offset-4">
                        <ul id="social-media">
                            <li><a href=""><img src="{{asset('img/facebook-icon.svg')}}" alt=""></a></li>
                            <li><a href=""><img src="{{asset('img/Twitter_logo_white.png')}}" alt=""></a></li>
                            <li><a href=""><img src="{{asset('img/linkedin_4096_black.png')}}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
        </div>

        {{--<p class="text-muted">Place sticky footer content here.</p>--}}
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
