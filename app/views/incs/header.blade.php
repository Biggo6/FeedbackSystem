
<!DOCTYPE html>
<html>
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="">

        <title>{{HelperX::getSystem()->app_name}} | Dashboard</title>

        <link href="{{url('izgram/assets/plugins/summernote/dist/summernote.css')}}" rel="stylesheet" />


        <link href="{{url('izgram/assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('izgram/assets/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('izgram/assets/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('izgram/assets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('izgram/assets/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        

        <link href="{{url('izgram/assets/plugins/jquery-circliful/css/jquery.circliful.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{url('izgram/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('izgram/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('izgram/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('izgram/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('izgram/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('izgram/assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('izgram/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{url('izgram/assets/js/modernizr.min.js')}}"></script>
        <link rel="stylesheet" href="{{url('ve/css/validationEngine.jquery.css')}}" type="text/css"/>

    </head>


    <body>


        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <a href="{{route('app.dashboard')}}" class="logo"><span>{{HelperX::getSystem()->app_name}}</span> </a>
                    </div>
                    <!-- End Logo container-->

                    <div class="menu-extras">

                        

                        <ul class="nav navbar-nav navbar-right pull-right">
                            

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="{{url('izgram/user.png')}}" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                    <!-- <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li> -->
                                    <li><a href="{{route('app.logout')}}"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>


                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>
            <!-- End topbar -->