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
                        @if(Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#signIn">Log/Sign in</a></li>
                        @else
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{Auth::user()->name}}</a>
                            <ul class="dropdown-menu" role="menu">
                            @if(Auth::user()->admin >=1)
                            <li class="dropdown-submenu"><a tabindex="-1" href="#">Rédaction</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/admin/createNews">Créer une actualité</a></li>
                                    <li><a href="/admin/edit-news">Editer une actualité</a></li>
                                    <li><a href="/admin/delete-news">Supprimer une actualité</a></li>
                                </ul>
                            </li>
                            @endif
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="modal fade bs-modal-sm" id="signIn" tabindex="-1" role="dialog" aria-labelledby="signInModal" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
              <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="signin">
            @include('auth.login')
        </div>
        <div class="tab-pane fade" id="signup">
            @include('auth.register')
        </div>
    </div>
      </div>
      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
