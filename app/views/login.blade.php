<!DOCTYPE html>
<html>
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

       

        <title>{{HelperX::getSystem()->app_name}}</title>

        <link href="izgram/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="izgram/assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="izgram/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="izgram/assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="izgram/assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="izgram/assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="izgram/assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="izgram/assets/js/modernizr.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <body>


        <div class="wrapper-page">

            <div class="text-center">
                @if(HelperX::getSystem()->logo == "")

                @else
                    <img src="{{HelperX::getSystem()->logo}}" />
                @endif
                
            </div>

            <form class="form-horizontal m-t-20" method="POST" action="{{route('app.login')}}">

                <div class="form-group">
                    <div class="col-xs-12">
                        @include('partials.files._error')
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="username" required="" placeholder="Username">
                        <i class="md md-account-circle form-control-feedback l-h-34"></i>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" name="password" required="" placeholder="Password">
                        <i class="md md-vpn-key form-control-feedback l-h-34"></i>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <!-- <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">
                                Remember me
                            </label> -->    
                        </div>

                    </div>
                </div>

                <div class="form-group text-right m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-block btn-primary btn-custom w-md waves-effect waves-light" type="submit">Log In
                        </button>
                    </div>
                </div>

                <div class="form-group m-t-30">

                    <center>{{date('Y')}} &copy; {{HelperX::getSystem()->footer_title}} | <a href="{{url('/')}}"> Survey</a></center>
                    <!-- <div class="col-sm-7">
                        <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your
                            password?</a>
                    </div>
                    <div class="col-sm-5 text-right">
                        <a href="pages-register.html" class="text-muted">Create an account</a>
                    </div> -->
                </div>
            </form>
        </div>

        
    	<script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src="izgram/assets/js/jquery.min.js"></script>
        <script src="izgram/assets/js/bootstrap.min.js"></script>
        <script src="izgram/assets/js/detect.js"></script>
        <script src="izgram/assets/js/fastclick.js"></script>
        <script src="izgram/assets/js/jquery.slimscroll.js"></script>
        <script src="izgram/assets/js/jquery.blockUI.js"></script>
        <script src="izgram/assets/js/waves.js"></script>
        <script src="izgram/assets/js/wow.min.js"></script>
        <script src="izgram/assets/js/jquery.nicescroll.js"></script>
        <script src="izgram/assets/js/jquery.scrollTo.min.js"></script>

        <!-- Custom main Js -->
        <script src="izgram/assets/js/jquery.core.js"></script>
        <script src="izgram/assets/js/jquery.app.js"></script>
	
	</body>

</html>