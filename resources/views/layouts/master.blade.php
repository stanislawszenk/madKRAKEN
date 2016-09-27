<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <title>@yield('title') madKRAKEN Esports Club</title>
    <link rel="icon" href="/images/favicon.jpg">
    <link href="{{ asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">

</head>
<body>

<div class="container nav-container">
    <div class="col-lg-12">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="/images/logo.png" alt="" class="img-responsive" class="logo"/></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">Home</a></li>
                        <li><a href="/teams">Teams</a></li>
                        <li><a href="/sponsors">Sponsors</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="text-left" style="margin-top:10px;">&copy; madKRAKEN eSports Club, All Rights Reserved. Design by <a href="https://twitter.com/sultanDaK1ng" target="_BLANK">sultaN</a>, Developed by <a href="https://twitter.com/StanislawSzenk" target="_BLANK">Stanislaw Szenk</a> & <a href="https://twitter.com/hvantent" target="_BLANK">Harmen</a>.</div>
        </div>
    </div>
</footer>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
