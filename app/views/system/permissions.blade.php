@extends('layout')

@section('content')

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title well"><i class="fa fa-list"></i> Manage Permissions</h4>
                        <hr/>
                    </div>
                </div>
                <!-- Page-Title -->


                <div class="row">

<div class="col-sm-12">
                        <div class="">
                            <div class="row">
                                <div class="col-md-12 card-box">
                                    
                                     @include('partials.files._success')
                                     <table id="datatable-0" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Permission</th>
                                                    @foreach(Role::all() as $r)
                                                    <th>{{$r->role_name}}</th>
                                                    @endforeach
                                                </tr>
                                            </thead>


                                            <tbody>

                                                <tr>
                                                    <td>1</td>
                                                    <td>User</td>
                                                    @foreach(Role::all() as $r)
                                                    <td><input type="checkbox" /></td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Question</td>
                                                    @foreach(Role::all() as $r)
                                                    <td><input type="checkbox" /></td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Feedback</td>
                                                    @foreach(Role::all() as $r)
                                                    <td><input type="checkbox" /></td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Configuration</td>
                                                    @foreach(Role::all() as $r)
                                                    <td><input type="checkbox" /></td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Reports</td>
                                                    @foreach(Role::all() as $r)
                                                    <td><input type="checkbox" /></td>
                                                    @endforeach
                                                </tr>

                                            </tbody>
                                        </table>

                                        <hr/>
                                        <button class="btn btn-success"><i class="fa fa-save"></i> Save Changes</button>
                                    
                                </div>

                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



@stop