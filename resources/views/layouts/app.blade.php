<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <title>madKRAKEN Esports</title>

        <link href="{{ asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet">
        <link href="{{ asset('css/admin.css') }}" type="text/css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="../"><img src="{{asset('/images/logo.png')}}" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="{{asset('/images/logo.png')}}" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="{{ Request::is('admin') ? 'active' : '' }}"><a href="{{URL::asset('admin')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li class="{{ Request::is('admin/news') ? 'active' : '' }}"><a href="{{URL::asset('admin/news')}}"><i class="fa fa-newspaper-o" aria-hidden="true"></i><span class="hidden-xs hidden-sm">News</span></a></li>
                        <li class="{{ Request::is('admin/spons') ? 'active' : '' }}"><a href="{{URL::asset('admin/spons')}}"><i class="fa fa-address-book" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Sponsors</span></a></li>
                        <li data-toggle="collapse" data-target="#teams" class="collapsed {{ Request::is('admin/teams*') ? 'active' : '' }}">
                            <a href="#"><i class="fa fa-users"></i> Teams <span class="arrow"></span></a>
                        </li>
                        <ul class="sub-menu collapse {{ Request::is('admin/teams*') ? 'in' : '' }}" id="teams">
                            <li class="{{ Request::is('admin/teams/teamsManagement') ? 'active' : '' }}"><a href="{{URL::asset('admin/teams/teamsManagement')}}"><i class="fa fa-users"></i>Teams Management</a></li>
                            <li class="{{ Request::is('admin/teams/playersManagement') ? 'active' : '' }}"><a href="{{URL::asset('admin/teams/playersManagement')}}"><i class="fa fa-user-circle"></i>Players management</a></li>
                        </ul>
                        <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>
                        <li><a href="/"><i class="fa fa-sign-out" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Quit Panel</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{Auth::user()->avatar}}" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                @if(Auth::check())
                                                <div class="navbar-content">
                                                    <span>{{Auth::user()->name}}</span>
                                                    <p class="text-muted small">
                                                        <a href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a>
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    <a href="/profile" class="view btn-sm active">View Profile</a>
                                                </div>
                                                @endif
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                    @yield('content')
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src='{{ asset('js/tinymce.min.js') }}'></script>
    <script>
     var xhr2 = false;
    $(document).ready(function() {
        if(xhr2 !== false)
        {
            xhr2.abort();
            xhr2 = false;
        }
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
    tinymce.init({
  selector: 'textarea',
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
});

 $(".ajaxModal").click(function()
 {
     if(xhr2 !== false)
     {
         xhr2.abort();
         xhr2 = false;
     }

     ajaxModal(this);
 });
 function ajaxModal(className)
 {
     var block_content = $(className).attr("data-target");
     block_content = block_content+"-content";
     $(block_content).empty();
     xhr2 = $.ajax({
         type: "GET",
         url: $(className).attr("urldata"),
         data: 'html',
         success: function(data){
             if(data){
                 $(block_content).append(data);
             }
         }
     });
 }
 </script>
</body>
</html>
