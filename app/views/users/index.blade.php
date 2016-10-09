@extends('layout')

@section('content')

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title well"><i class="fa fa-users"></i> Manage Users</h4>
                        <hr/>
                    </div>
                </div>
                <!-- Page-Title -->


                <div class="row">

<div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-md-3">
                                    <h4 class="m-t-0 header-title "><b><i class="fa fa-plus"></i> Add User</b></h4>
                                    <hr/>

                                    <form role="form" id="registerForm_User">
                                        <div class="form-group">
                                            <label for="userName">User Name: </label>
                                            <input type="text" required class="form-control validate[required]" data-errormessage-value-missing="User name is required!" data-prompt-position="bottomRight" id="userName" name="userName" placeholder="Enter User Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="passWord">Password </label>
                                            <input type="password" required class="form-control validate[required,funcCall[checkPassMatch[cpassWord]]]" data-errormessage-value-missing="Password is required!" data-prompt-position="bottomRight" id="passWord" name="passWord" placeholder="Enter Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="cpassWord">Confirm Password </label>
                                            <input type="password" required class="form-control validate[required,funcCall[checkPassMatch[passWord]]]" data-errormessage-value-missing="Confirm Password is required!" data-prompt-position="bottomRight" id="cpassWord" name="cpassWord" placeholder="Enter Confirm Password">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="userStatus">Status </label>
                                            <select class="form-control validate[required]" data-errormessage-value-missing="Status is required!" data-prompt-position="bottomRight" id="userStatus" name="userStatus">
                                               
                                                <option value="1">Active</option>
                                                <option value="0">Blocked</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="userRole">Role</label>
                                            <select required class="form-control validate[required]" data-errormessage-value-missing="Role is required!" data-prompt-position="bottomRight" id="userRole" name="userRole">
                                            	<option value="">--Select Role--</option>
                                                <?php $roles = Role::all(); ?>
                                                @foreach($roles as $role)
                                            	<option value="{{$role->id}}">{{$role->role_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <br/><hr/>
                                        
                                        <button type="button" id="userSave" class="btn btn-purple waves-effect waves-light"><i class="fa fa-save"></i> SAVE</button>
                                    </form>
                                </div>

                                <div class="col-md-7">
                                    <h4 class="m-t-0 header-title"><b><i class="fa fa-list"></i> Users</b></h4>
                                    <hr/>
                                     @include('partials.files._success')
                                    <div id="bizArea">
                                    	@include('users.shared')
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



@stop