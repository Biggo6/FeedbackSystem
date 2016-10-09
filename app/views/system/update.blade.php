@extends('layout')

@section('content')

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title well"><i class="fa fa-cog"></i> Update System Configuration</h4>
                        <hr/>
                    </div>
                </div>
                <!-- Page-Title -->


                <div class="row">

<div class="col-sm-12">
                        <div class="">
                            <div class="row">
                                <div class="col-md-6 card-box">
                                    <h4 class="m-t-0 header-title "><b><i class="fa fa-edit"></i> Update System Information</b></h4>
                                    <hr/>

                                    <form role="form" id="registerForm_App">
                                        <div class="form-group">
                                            <label for="appName">Application Name: </label>
                                            <input type="text" required class="form-control validate[required]" data-errormessage-value-missing="Application name is required!" value="{{HelperX::getSystem()->app_name}}" data-prompt-position="bottomRight" id="appName" name="appName" placeholder="Enter Application Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="appPowerBy">Powered By Title: </label>
                                            <input type="text" required class="form-control validate[required]" data-errormessage-value-missing="Powered By Title is required!" disabled value="{{HelperX::getSystem()->powerby}}" data-prompt-position="bottomRight" id="appPowerBy" name="appPowerBy" placeholder="Enter Powered By Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="appCopyRight">Copyright Title: </label>
                                            <input type="text" required class="form-control"  value="{{HelperX::getSystem()->footer_title}}"  id="appCopyRight" name="appCopyRight" placeholder="Enter Copyright Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="appLogo">Logo: </label>
                                            <input type="file" id="appLogo" name="appLogo" class="filestyle" data-buttonName="btn-primary">
                                        </div>
                                        
                                        <button type="button" id="systemSave" class="btn btn-purple waves-effect waves-light"><i class="fa fa-save"></i> UPDATE INFORMATION</button>
                                    </form>
                                </div>

                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



@stop