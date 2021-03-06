<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="/csstemplate/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/csstemplate/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/csstemplate/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/csstemplate/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/csstemplate/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="/csstemplate/vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="/csstemplate/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="/csstemplate/images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="/csstemplate/images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">elements</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Chat</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>



                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        @guest
                        <ul>


                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                              </ul>
                        @endguest
                </div>
            </div>

        </header><!-- /header -->
        @yield('content')

  <script src="/csstemplate/vendors/jquery/dist/jquery.min.js"></script>
  <script src="/csstemplate/vendors/popper.js/dist/umd/popper.min.js"></script>
  <script src="/csstemplate/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/csstemplate/assets/js/main.js"></script>


  <script src="/csstemplate/vendors/chart.js/dist/Chart.bundle.min.js"></script>
  <script src="/csstemplate/assets/js/dashboard.js"></script>
  <script src="/csstemplate/assets/js/widgets.js"></script>
  <script src="/csstemplate/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="/csstemplate/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <script src="/csstemplate/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script>
      (function($) {
          "use strict";

          jQuery('#vmap').vectorMap({
              map: 'world_en',
              backgroundColor: null,
              color: '#ffffff',
              hoverOpacity: 0.7,
              selectedColor: '#1de9b6',
              enableZoom: true,
              showTooltip: true,
              values: sample_data,
              scaleColors: ['#1de9b6', '#03a9f5'],
              normalizeFunction: 'polynomial'
          });
      })(jQuery);
  </script>
