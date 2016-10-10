@extends('layout')

@section('content')

        <div class="wrapper">
            <div class="container">

                


                <div class="row">

<div class="col-sm-12">
                        <div class="">
                            <div class="row">
                                <div class="col-md-6 card-box">
                                    <h4 class="m-t-0 header-title "><b><i class="fa fa-plus"></i> Provide New Question Information</b></h4>
                                    <hr/>

                                    <form role="form" id="registerForm_Qn">
                                        <div class="form-group">
                                            <label for="qnBody" id="">Question Body: </label>
                                            <textarea id="qnBody" name="qnBody" class="form-control validate[required] {{HelperX::getEditor()}}" data-errormessage-value-missing="Question Body is required!" data-prompt-position="bottomRight"></textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="publishQn">Publish Now: </label>
                                            <select class="form-control validate[required]" data-errormessage-value-missing="Publish is required!" data-prompt-position="bottomRight" id="publishQn" name="publishQn">
                                               
                                                <option value="1">YES</option>
                                                <option value="0">NO</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="RequiredQn">Is Required?: </label>
                                            <select class="form-control validate[required]" data-errormessage-value-missing="isRequired field is required!" data-prompt-position="bottomRight" id="RequiredQn" name="RequiredQn">
                                               
                                                <option value="1">YES</option>
                                                <option value="0">NO</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="RateDescription">Rate Description: </label>
                                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Rate Description field is required!" data-prompt-position="bottomRight" id="RateDescription" value="Satisfaction" name="RateDescription" />
                                               
                                        </div>
                                        <div class="form-group">
                                            <label for="maximumRateDescription">Maximum Rate Description: </label>
                                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Maximum Rate Description field is required!" data-prompt-position="bottomRight" id="maximumRateDescription" value="Completely satisfied" name="maximumRateDescription" />
                                               
                                        </div>
                                        <div class="form-group">
                                            <label for="manimumRateDescription">Mininum Rate Description: </label>
                                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Mininum Rate Description field is required!" data-prompt-position="bottomRight" id="manimumRateDescription" value="Not Satisfied" name="manimumRateDescription" />
                                               
                                        </div>

                                        <div class="form-group">
                                            <label for="rateValues">Rate Values Count: </label>
                                            <input type="text" class="form-control validate[required]" data-errormessage-value-missing="Mininum Rate Description field is required!" data-prompt-position="bottomRight" id="rateValues" value="5" name="rateValues" />
                                               
                                        </div>

                                       
                                        <br/>
                                        <hr/>
                                        
                                        
                                        <p><button type="button" register="save" class="btn register btn-purple waves-effect waves-light"><i class="fa fa-save"></i> SAVE</button> {{-- <button register="saveandnew" type="button"  class="btn register btn-success waves-effect waves-light"><i class="fa fa-save"></i> SAVE AND NEW</button> --}}</p>
                                    </form>
                                </div>

                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



@stop