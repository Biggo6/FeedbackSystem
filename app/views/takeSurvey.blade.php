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


        <link rel="stylesheet" href="{{url('ve/css/validationEngine.jquery.css')}}" type="text/css"/>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <body>

        <div class="wrapper" id="takeSurveyeArea-1" style="display:none">
            <div class="container">
                <div class="row">
                            <div class="col-sm-12 card-box">
                                <center id="loader"><img src="{{url('izgram/loader.gif')}}" /></center>
                                <div id="header" style="display: none">
                                    <h1 class="alert alert-info"><img style="height:50px" src="{{HelperX::getSystem()->logo}}" /> <span style="margin:auto 100px">{{HelperX::getSystem()->footer_title}}</span> <span class="pull-right">Questions: {{Question::count()}}</span></h1>
                                    <hr/>

                                    <div class="col-md-6 card-box" id="surveyContainer"></div>
                                </div>
                                
                            </div>
                </div>
                <div class="row card-box">
                    <i>{{date('Y')}} &copy. </i> Powered By <a href="http://softnet.co.tz">{{HelperX::getSystem()->footer_title}} | <a href="{{url('auth')}}"> C-panel</a> | <a href="{{url('/')}}"> Survey</a></a>
                </div>
            </div>
        </div>        

        <div class="wrapper-page">
            <div id="takeSurveyeArea">
            <div class="text-center">
                @if(HelperX::getSystem()->logo == "")

                @else
                    <img src="{{HelperX::getSystem()->logo}}" />
                @endif
                
            </div>



            
                <form class="form-horizontal m-t-20" id="registerForm_Survey">

                <div class="form-group">
                    <div class="col-xs-12">
                        @include('partials.files._error')
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        
                            <label for="deptName">Department </label>
                            <select class="form-control validate[required]" data-errormessage-value-missing="Department is required!" data-prompt-position="bottomRight" id="deptName" name="deptName">
                               
                                <option value="">--Select Department--</option>
                                <?php $depts = Dept::all(); ?>
                                @foreach ($depts as $d)
                                    <option value="{{$d->id}}">{{$d->dept_name}}</option>
                                @endforeach
                            </select>
                        
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <label for="subdeptName">Sub-Department <span class="pull-right" style="display:none" id="lzx"><img src="{{url('izgram/jax.gif')}}" /></span></label>
                            <select class="form-control validate[required]" data-errormessage-value-missing="Sub Department is required!" data-prompt-position="bottomRight" id="subdeptName" name="subdeptName">
                               
    
                            </select>
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
                        <button id="takeSurvey" class="btn btn-block btn-primary btn-custom w-md waves-effect waves-light" type="button">Take A Survey
                        </button>
                    </div>
                </div>

                <div class="form-group m-t-30">

                    <center>{{date('Y')}} &copy; {{HelperX::getSystem()->footer_title}} | <a href="{{url('auth')}}"> C-panel</a> </center>
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

        <script src="{{url('ve/js/languages/jquery.validationEngine-en.js')}}" type="text/javascript" charset="utf-8"></script>
        <script src="{{url('ve/js/jquery.validationEngine.js')}}" type="text/javascript" charset="utf-8"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.3.0/knockout-min.js"></script>

        <script src="{{url('survey/survey.bootstrap.js')}}"></script>

        <script type="text/javascript">

        var data;

        var dServer = [];

        function sendDataToServer(survey) {
            
            var resultAsString = JSON.stringify(survey.data);
            dServer.push({"name":"feedback", "value": resultAsString});
            dServer.push({"name":data[0].name, "value": data[0].value});
            dServer.push({"name":data[1].name, "value": data[1].value});
            $.post('{{route("app.storeSurvey")}}', dServer, function(res){
                console.log(res)
            });
        };

        $(function(){

            $('#deptName').on('change', function(){
                var dept = $(this).val();
                $('#lzx').show();
                $('#subdeptName').html('');
                $.post('{{route("app.getSubDepart")}}', {dept:dept}, function(res){
                    $('#lzx').hide();
                    $('#subdeptName').html(res);
                });
            });

            $('#takeSurvey').on('click', function(){
                var registerForm = $('#registerForm_Survey').validationEngine('validate');
                if(registerForm){
                    data = $('#registerForm_Survey').serializeArray();
                    $('#takeSurveyeArea').css('opacity', 0.2);
                    $('#takeSurvey').prop('disabled', true);
                    $.post('{{route("app.takeSurvey")}}', data, function(res){
                        $('#takeSurveyeArea').css('opacity', 1).hide();
                        $('#takeSurveyeArea-1').fadeIn();
                        $('#loader').hide();

                        $('#header').show();

                        var surveyJSON = res;
                        
                        var survey = new Survey.Survey(surveyJSON, "surveyContainer");
                        survey.showProgressBar = "top";
                        survey.css = {
                            navigationButton: "btn btn-success btn-lg"   
                       };
                        survey.onComplete.add(sendDataToServer);
                        // survey.onValidateQuestion.add(function (s, options) {
                        //     console.log(options);
                        // });
                        survey.render();

                    });
                }
            });               
        });
        </script>
	
	</body>

</html>