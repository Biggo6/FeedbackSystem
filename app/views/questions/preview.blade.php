@extends('layout')

@section('content')

        <style type="text/css">
            body{
                h1, h2, h3, h4, h5, h6 {
                    color: #505458;
                    font-family: 'Roboto', sans-serif;
                    margin: 40px 0;
                }
                .h5, h5 {
                    font-size: 24px;
                }
            }
        </style>

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
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
                <!-- Page-Title -->


                <div class="row card-box">
                    <i>{{date('Y')}} &copy. </i> Powered By <a href="http://softnet.co.tz">{{HelperX::getSystem()->footer_title}}</a>
                </div>
            </div>
        </div>



@stop