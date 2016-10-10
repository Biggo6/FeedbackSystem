@extends('layout')

@section('content')

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title well"><i class="fa fa-list"></i> Manage Questions</h4>
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
                                     <table id="datatable-2" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Question Body</th>
                                                    <th>Published</th>
                                                    
                                                    <th>Created At</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>


                                            <tbody>

                                                <?php $i = 1;
                                                $depts = Question::orderBy('created_at', 'DESC')->get();
                                                ?>

                                                @foreach($depts as $d)
                                                <tr>
                                                    <td>{{$i}}</td>
                                                    <td>{{$d->body}}</td>
                                                    <td>{{$d->published==1 ? '<label class="label label-success">YES</label>' : '<label class="label label-danger">NO</label>'}}</td>
                                                
                                                    <td>{{Carbon::parse($d->created_at)->format('Y-m-d h:i:s')}}</td>
                                                    <td>
                                                        <span style="cursor: pointer"  class="label label-primary" onclick="" url="" title="Edit This Record" rowid=""><i class="fa fa-edit"></i></span>
                                                        <a href="{{route('question.destroy', $d->id)}}"><span style="cursor: pointer"  class="label label-danger" onclick="return deleteConfirm()" url="" title="Delete This Record" rowid=""><i class="fa fa-trash"></i></span></a>
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



@stop