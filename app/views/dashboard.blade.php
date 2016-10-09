@extends('layout')

@section('content')
        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title alert alert-success"><i class="fa fa-info-circle"></i> Welcome Admin!</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title alert alert-warning"><i class="fa fa-info-circle"></i> Here there will be your dashboard</h4>
                    </div>
                </div>




                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                {{date('Y')}} &copy; {{HelperX::getSystem()->powerby}}
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div> <!-- end container -->
        </div>
@stop        
        <!-- End wrapper -->



