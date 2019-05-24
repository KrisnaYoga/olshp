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
        <link href="{{ asset('/template/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/template/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">

        <link href="{{ asset('/template/assets/css/style.css') }}" rel="stylesheet">
        

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
                        <h3 class="menu-title">Management</h3><!-- /.menu-title -->
                        <li>
                            <a href=""> <i class="menu-icon fa fa-gamepad"></i>Product</a>
                        </li>
                        <li>
                            <a href="{{route('category.index')}}"> <i class="menu-icon fa fa-gamepad"></i>Product Category</a>
                        </li>
                        <li>
                            <a href="{{route('courier.index')}}"> <i class="menu-icon fa fa-truck"></i>Couriers</a>
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

                                <form action="{{ route('admin.logout') }}">
                                <button type="submit"><a class="nav-link" href=""><i class="fa fa-power-off"></i> Logout</a></button>
                                </form>
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

        <script src="{{ asset('/template/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('/template/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('/template/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('/template/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('/template/vendors/jszip/dist/jszip.min.js') }}"></script>
        <script src="{{ asset('/template/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ asset('/template/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
        <script src="{{ asset('/template/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('/template/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('/template/vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('/template/assets/js/init-scripts/data-table/datatables-init.js') }}"></script>

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