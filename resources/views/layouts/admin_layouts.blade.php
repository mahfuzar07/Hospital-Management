<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{ asset('backend') }}/images/favicon_1.ico">

    <title>Hospital Management</title>

    <!-- Base Css Files -->
    <link href="{{ asset('backend') }}/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Icons -->
    <link href="{{ asset('backend') }}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
    <link href="{{ asset('backend') }}/css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- animate css -->
    <link href="{{ asset('backend') }}/css/animate.css" rel="stylesheet" />
    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">




    <!-- Waves-effect -->
    <link href="{{ asset('backend') }}/css/waves-effect.css" rel="stylesheet">

    <!-- sweet alerts -->
    <link href="{{ asset('backend') }}/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

    <!-- Custom Files -->
    <link href="{{ asset('backend') }}/css/helper.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend') }}/css/style.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    {{-- [if lt IE 9]> --}}
    {{-- <script src="{{ asset('backend') }}/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="{{ asset('backend') }}/https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script> --}}
    {{-- <![endif] --}}

    <script src="{{ asset('backend') }}/js/modernizr.min.js"></script>

    <link href="{{ asset('backend') }}/assets/summernote/summernote.css" rel="stylesheet" />



</head>


@guest
@else

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="" class="logo"><i class="md md-terrain"></i> <span>H.M
                            </span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right">


                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i
                                            class="md md-crop-free"></i></a>
                                </li>

                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown"
                                        aria-expanded="true">WELCOME <i class="fa fa-user"></i>
                                        {{ Auth::user()->name }}{{-- <img src="" alt="user-img" class="img-circle"> </a> --}}

                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('admin.logout') }}"><i
                                                        class="md md-settings-power"></i>
                                                    Logout</a></li>
                                        </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>

            <!-- Top Bar End -->

        @endguest

        @yield('admin_content')

        <!-- ========== Left Sidebar Start ========== -->
        @guest
        @else
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>

                                <a href="" target="_blank" class="waves-effect"><i class="md md-web"></i><span> Visit
                                        Site</span></a>

                                <a href="" class=" @yield('Dashboard')" class="waves-effect"><i
                                        class="md md-home"></i><span> Dashboard </span></a>

                                <a href="{{ route('admin.alluser') }}" class=" @yield('all user')"
                                    class="waves-effect"><i class="md md-group"></i><span> All Users</span></a>

                                {{-- <a href="" class=" @yield('All Doctor')" class="waves-effect"><i
                                        class="md md-group"></i><span> </span></a> --}}

                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-group"></i><span>
                                        Doctor</span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a class=" @yield('productadd')" class="waves-effect" href="">Add Doctor</a></li>
                                    <li><a class=" @yield('productmn')" class="waves-effect" href="">Manage Doctor</a>
                                    </li>

                                </ul>
                            </li>



                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>



        @endguest
        <!-- /Right-bar -->


    </div>
    <!-- END wrapper -->




    <script>
        var resizefunc = [];

    </script>

    <!-- jQuery  -->
    <script src="{{ asset('backend') }}/js/jquery.min.js"></script>
    <script src="{{ asset('backend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('backend') }}/js/waves.js"></script>
    <script src="{{ asset('backend') }}/js/wow.min.js"></script>
    <script src="{{ asset('backend') }}/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="{{ asset('backend') }}/js/jquery.scrollTo.min.js"></script>
    <script src="{{ asset('backend') }}/assets/chat/moment-2.2.1.js"></script>
    <script src="{{ asset('backend') }}/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="{{ asset('backend') }}/assets/jquery-detectmobile/detect.js"></script>
    <script src="{{ asset('backend') }}/assets/fastclick/fastclick.js"></script>
    <script src="{{ asset('backend') }}/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="{{ asset('backend') }}/assets/jquery-blockui/jquery.blockUI.js"></script>

    <!-- sweet alerts -->
    <script src="{{ asset('backend') }}/assets/sweet-alert/sweet-alert.min.js"></script>
    <script src="{{ asset('backend') }}/assets/sweet-alert/sweet-alert.init.js"></script>

    <!-- flot Chart -->
    <script src="{{ asset('backend') }}/assets/flot-chart/jquery.flot.js"></script>
    <script src="{{ asset('backend') }}/assets/flot-chart/jquery.flot.time.js"></script>
    <script src="{{ asset('backend') }}/assets/flot-chart/jquery.flot.tooltip.min.js"></script>
    <script src="{{ asset('backend') }}/assets/flot-chart/jquery.flot.resize.js"></script>
    <script src="{{ asset('backend') }}/assets/flot-chart/jquery.flot.pie.js"></script>
    <script src="{{ asset('backend') }}/assets/flot-chart/jquery.flot.selection.js"></script>
    <script src="{{ asset('backend') }}/assets/flot-chart/jquery.flot.stack.js"></script>
    <script src="{{ asset('backend') }}/assets/flot-chart/jquery.flot.crosshair.js"></script>

    <!-- Counter-up -->
    <script src="{{ asset('backend') }}/assets/counterup/waypoints.min.js" type="text/javascript"></script>
    <script src="{{ asset('backend') }}/assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('backend') }}/js/jquery.app.js"></script>

    <!-- Dashboard -->
    <script src="{{ asset('backend') }}/js/jquery.dashboard.js"></script>

    <!-- Chat -->
    <script src="{{ asset('backend') }}/js/jquery.chat.js"></script>

    <!-- Todo -->
    <script src="{{ asset('backend') }}/js/jquery.todo.js"></script>

    <script src="{{ asset('backend') }}/assets/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/assets/datatables/dataTables.bootstrap.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>





    <script src="{{ asset('backend') }}/assets/summernote/summernote.min.js"></script>

    <script type="text/javascript">
        /* ==============================================
            Counter Up
            =============================================== */
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 100,
                time: 1200
            });
        });

    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
        });

    </script>




    <script>
        jQuery(document).ready(function() {

            $('.summernote').summernote({
                height: 200,

                minHeight: null,
                maxHeight: null,

                focus: true
            });

        });

    </script>








</body>

</html>
