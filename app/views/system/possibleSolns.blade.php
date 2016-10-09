@extends('layout')

@section('content')

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title well"><i class="fa fa-pencil"></i> Manage Possible Solutions</h4>
                        <hr/>
                    </div>
                </div>
                <!-- Page-Title -->


                <div class="row">

<div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4 class="m-t-0 header-title "><b><i class="fa fa-plus"></i> Add New Solution</b></h4>
                                    <hr/>

                                    <form role="form" id="registerForm_Solns">
                                        <div class="form-group">
                                            <label for="solnName">Solution Name: </label>
                                            <input type="text" required class="form-control validate[required]" data-errormessage-value-missing="Solution name is required!" data-prompt-position="bottomRight" id="solnName" name="solnName" placeholder="Enter User Name">
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="solnStatus">Status </label>
                                            <select class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight" id="solnStatus" name="solnStatus">
                                               
                                                <option value="1">Active</option>
                                                <option value="0">Blocked</option>
                                            </select>
                                        </div>
                                        
                                        
                                        <button type="button" id="solnSave" class="btn btn-purple waves-effect waves-light"><i class="fa fa-save"></i> SAVE</button>
                                    </form>
                                </div>

                                <div class="col-md-7">
                                    <h4 class="m-t-0 header-title"><b><i class="fa fa-list"></i> Possible Solutions</b></h4>
                                    <hr/>
                                     @include('partials.files._success')
                                    <div id="bizArea">
                                    	<table id="datatable-3" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Solution Name</th>
                                                    <th>Status</th>
                                                    
                                                    <th>Created At</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>


                                            <tbody>

                                                <?php $i = 1;
                                                $depts = PSoln::orderBy('created_at', 'DESC')->get();
                                                ?>

                                                @foreach($depts as $d)
                                                <tr>
                                                    <td>{{$i}}</td>
                                                    <td>{{$d->solution_name}}</td>
                                                    <td>{{HelperX::getStatus($d->status)}}</td>
                                                
                                                    <td>{{Carbon::parse($d->created_at)->format('Y-m-d h:i:s')}}</td>
                                                    <td>
                                                        <span style="cursor: pointer"  class="label label-primary" onclick="" url="" title="Edit This Record" rowid=""><i class="fa fa-edit"></i></span>
                                                        <span style="cursor: pointer"  class="label label-danger" onclick="" url="" title="Delete This Record" rowid=""><i class="fa fa-trash"></i></span>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                                @endforeach
                                                

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



@stop