<html>    
    <head>
        <title>@yield('title')</title>
        <meta name="description" content="Dashboard">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--
        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">
        -->

        <link href="{{ asset('/template/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/template/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/template/vendors/themify-icons/css/themify-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('/template/vendors/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/template/vendors/selectFX/css/cs-skin-elastic.css') }}" rel="stylesheet">
        <link href="{{ asset('/template/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('/template/assets/css/style.css') }}">
        

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
                    <a class="navbar-brand" href="./"><img src="{{ asset('/template/images/logo.png') }}" alt="Logo"></a>
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="/log-in"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                        </li>
                        <h3 class="menu-title">Management Game</h3><!-- /.menu-title -->
                        
                        <li>
                            <a href="/addnewgame"> <i class="menu-icon fa fa-gamepad"></i>Add New Game</a>
                        </li>

                        <li>
                            <a href="/listgame"> <i class="menu-icon fa fa-gamepad"></i>List Game</a>
                        </li>


                        <!--
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Components</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                                <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                                <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                                <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                                <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                                <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                                <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                                <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                                <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                                <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                                <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                                <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                                <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                            </ul>
                        </li>
                        -->

                        <h3 class="menu-title">Icons</h3><!-- /.menu-title -->

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                                <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                                <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                                <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                            </ul>
                        </li>

                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                                <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                                <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                                <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->
        <div id="right-panel" class="right-panel">

            <!-- Header -->
            <header id="header" class="header">

                <div class="header-menu">

                    <div class="col-sm-7">
                        <div class="header-left">

                            <!-- Search Button -->
                            <button class="search-trigger"><i class="fa fa-search"></i></button>
                            <div class="form-inline">
                                <form class="search-form">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                    <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                                </form>
                            </div>
                            <!-- Search Button -->

                        </div>
                    </div>

                    <div class="col-sm-5">

                        <!-- Profile -->
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="{{asset('/template/images/admin.jpg')}}" alt="User Avatar">
                            </a>

                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                            </div>
                        </div>
                        <!-- Profile -->
                    
                    </div>
                </div>

            </header>
            <!-- Header -->

            <!-- Header 2-->
            <div class="breadcrumbs">

                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Header 2-->

            <!-- Content -->

            <div class="content mt-3">

                @yield('content')

            </div>

        <!-- Right Panel -->

        <script src="{{ asset('/template/vendors/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('/template/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('/template/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/template/assets/js/main.js') }}"></script>

        <script src="{{ asset('/template/vendors/chart.js/dist/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('/template/assets/js/dashboard.js') }}"></script>
        <script src="{{ asset('/template/assets/js/widgets.js') }}"></script>
        <script src="{{ asset('/template/vendors/jqvmap/dist/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('/template/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
        <script src="{{ asset('/template/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
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
    </body>
</html>