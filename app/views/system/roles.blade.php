@extends('layout')

@section('content')

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title well"><i class="fa fa-key"></i> Manage Roles</h4>
                        <hr/>
                    </div>
                </div>
                <!-- Page-Title -->


                <div class="row">

<div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4 class="m-t-0 header-title "><b><i class="fa fa-plus"></i> Add New Role</b></h4>
                                    <hr/>

                                    <form role="form" id="registerForm_Role">
                                        <div class="form-group">
                                            <label for="roleName">Role Name: </label>
                                            <input type="text" required class="form-control validate[required]" data-errormessage-value-missing="Role name is required!" data-prompt-position="bottomRight" id="roleName" name="roleName" placeholder="Enter Role Name">
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="roleStatus">Status </label>
                                            <select class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight" id="roleStatus" name="roleStatus">
                                               
                                                <option value="1">Active</option>
                                                <option value="0">Blocked</option>
                                            </select>
                                        </div>
                                        
                                        
                                        <button type="button" id="roleSave" class="btn btn-purple waves-effect waves-light"><i class="fa fa-save"></i> SAVE</button>
                                    </form>
                                </div>

                                <div class="col-md-7">
                                    <h4 class="m-t-0 header-title"><b><i class="fa fa-list"></i> Roles</b></h4>
                                    <hr/>
                                     @include('partials.files._success')
                                    <div id="bizArea">
                                    	<table id="datatable-5" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Role Name</th>
                                                    <th>Status</th>
                                                    
                                                    <th>Created At</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>


                                            <tbody>

                                                <?php $i = 1;
                                                $depts = Role::orderBy('created_at', 'DESC')->get();
                                                ?>

                                                @foreach($depts as $d)
                                                <tr>
                                                    <td>{{$i}}</td>
                                                    <td>{{$d->role_name}}</td>
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