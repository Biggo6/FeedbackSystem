@extends('layout')

@section('content')

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title well"><i class="fa fa-plus"></i> Add New Question</h4>
                        <hr/>
                    </div>
                </div>
                <!-- Page-Title -->


                <div class="row">

<div class="col-sm-12">
                        <div class="">
                            <div class="row">
                                <div class="col-md-6 card-box">
                                    <h4 class="m-t-0 header-title "><b><i class="fa fa-plus"></i> Provide New Question Information</b></h4>
                                    <hr/>

                                    <form role="form" id="registerForm_Qn">
                                        <div class="form-group">
                                            <label for="qnBody">Question Body: </label>
                                            <textarea id="qnBody" name="qnBody" class="form-control validate[required] summernote" data-errormessage-value-missing="Question Body is required!" data-prompt-position="bottomRight"></textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="publishQn">Publish Now: </label>
                                            <select class="form-control validate[required]" data-errormessage-value-missing="Publish is required!" data-prompt-position="bottomRight" id="publishQn" name="publishQn">
                                               
                                                <option value="1">YES</option>
                                                <option value="0">NO</option>
                                            </select>
                                        </div>

                                        <br/>
                                        <br/>
                                        <hr/>
                                        
                                        
                                        <p><button type="button" register="save" class="btn register btn-purple waves-effect waves-light"><i class="fa fa-save"></i> SAVE</button> <button register="saveandnew" type="button"  class="btn register btn-success waves-effect waves-light"><i class="fa fa-save"></i> SAVE AND NEW</button></p>
                                    </form>
                                </div>

                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



@stop