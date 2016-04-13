<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="The College of Technology">

    <title>College of Technology</title>

    <!-- Custom CSS -->
    <link href="{{URL::to('assets')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::to('assets')}}/font-awesome/font-awesome.min.css" rel="stylesheet">

    <!-- Application Core CSS -->
    <link href="{{URL::to('assets')}}/css/app.css" rel="stylesheet">

</head>
<body id="app-layout">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">College of Technology</a>
                        <img src="">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="services.html">Home</a>
                            </li>

                            <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Programs <b class="caret"></b></a>
                             <ul class="dropdown-menu">
                               <li><a href="">Computer Engineering</a></li>
                               <li class="divider"></li>
                               <li><a href="{{ route('electrical') }}">Electrical Engineering</a></li>
                               <li class="divider"></li>
                               <li><a href="">HND</a></li>
                               <li class="divider"></li>
                               <li><a href="">TWCET</a></li>
                           </ul>
                       </li>

                       <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">Registration</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="portfolio-2-col.html">Tuition Fees</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Partners <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Forum <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li>
                                <a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li >
                      <a href="#" class="">News & Events</a>
                  </li>
                  <li >
                      <a href="#" class="">Services</a>
                  </li>

                  <li >
                      <a href="#" class="">Activities</a>
                  </li>
                  <li>
                    <a href="services.html">Calender</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.navbar-collapse -->
</div>
</div>
<!-- /.container -->
</nav>
<div style="clear: left;"></div>
@yield('content')

<!-- Footer -->
<footer class="footer">
    <div class="navbar-fixed-bottom">
        <div class="row">
            <div class="col-lg-9">
                <p>Copyright &copy; College of Technology <br>
                    {!! $mytime = Carbon\Carbon::now()!!}</p>
                </div>
                <!-- Right Side Of Navbar -->

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                    @endif
                </ul>

            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{URL::to('assets')}}/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::to('assets')}}/js/bootstrap.min.js"></script>

    <!--Application Core JavaScripts -->
    <script src="{{URL::to('assets')}}/js/app.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>
</html>
