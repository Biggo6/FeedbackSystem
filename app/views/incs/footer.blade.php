        <!-- jQuery  -->
        <script src="{{url('izgram/assets/js/jquery.min.js')}}"></script>

        <script src="{{url('izgram/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{url('izgram/assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
        <script src="{{url('izgram/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{url('izgram/assets/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
        <script src="{{url('izgram/assets/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{url('izgram/assets/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{url('izgram/assets/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{url('izgram/assets/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{url('izgram/assets/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{url('izgram/assets/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
        <script src="{{url('izgram/assets/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{url('izgram/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{url('izgram/assets/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
        <script src="{{url('izgram/assets/plugins/datatables/dataTables.scroller.min.js')}}"></script>

        <!--form summernote-->
        <script src="{{url('izgram/assets/plugins/summernote/dist/summernote.min.js')}}"></script>
        <script>

            jQuery(document).ready(function(){



                $('.summernote').summernote({
                    height: 350,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });

               

            });
        </script>

        <script src="{{url('bootstrap-filestyle/src/bootstrap-filestyle.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{url('izgram/assets/pages/datatables.init.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();
            } );
            

        </script>

        <script src="{{url('ve/js/languages/jquery.validationEngine-en.js')}}" type="text/javascript" charset="utf-8"></script>
        <script src="{{url('ve/js/jquery.validationEngine.js')}}" type="text/javascript" charset="utf-8"></script>

        <script src="{{url('iztools/biggo.js')}}"></script>

        <script type="text/javascript">
        function checkPassMatch(field, rules, i, options){
            var a=rules[i+2];
            if((field.val()) != ( $("#"+a).val() ) ){
               return "Password Mismatches"
            }
        }
        $(function(){
            $('body').on('click', '#userSave', function(){
                var registerForm = $('#registerForm_User').validationEngine('validate');
                if(registerForm){
                   var data = Biggo.serializeData(registerForm_User); 
                   Biggo.applyOpacity(registerForm_User);
                   Biggo.disableEl(userSave);
                   Biggo.talkToServer('{{route("users.store")}}', data).then(function(res){
                        Biggo.removeOpacity(registerForm_User);
                        Biggo.enableEl(userSave);
                    
                        if(res.error){
                            Biggo.showFeedBack(registerForm_User, res.msg, res.error);
                        }else{
                            Biggo.resetForm(registerForm_User);
                            window.location = "{{route('users.refreshWith')}}"; 
                        }
                        
                   });
                }
            });
            $('.register').on('click', function(){
                    alert(34)
            });     
        });
        </script>


        <script src="{{url('izgram/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{url('izgram/assets/js/detect.js')}}"></script>
        <script src="{{url('izgram/assets/js/fastclick.js')}}"></script>
        <script src="{{url('izgram/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{url('izgram/assets/js/waves.js')}}"></script>
        <script src="{{url('izgram/assets/js/wow.min.js')}}"></script>
        <script src="{{url('izgram/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{url('izgram/assets/js/jquery.scrollTo.min.js')}}"></script>

        <!-- Counter Up  -->
        <script src="{{url('izgram/assets/plugins/waypoints/lib/jquery.waypoints.js')}}"></script>
        <script src="{{url('izgram/assets/plugins/counterup/jquery.counterup.min.js')}}"></script>

        <!-- circliful Chart -->
        <script src="{{url('izgram/assets/plugins/jquery-circliful/js/jquery.circliful.min.js')}}"></script>
        <script src="{{url('izgram/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- skycons -->
        <script src="{{url('izgram/assets/plugins/skyicons/skycons.min.js')}}" type="text/javascript"></script>

        <!-- Page js  -->
        <script src="{{url('izgram/assets/pages/jquery.dashboard.js')}}"></script>

        <!-- Custom main Js -->
        <script src="{{url('izgram/assets/js/jquery.core.js')}}"></script>
        <script src="{{url('izgram/assets/js/jquery.app.js')}}"></script>


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                $('.circliful-chart').circliful();
            });

            /* BEGIN SVG WEATHER ICON */
            if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#3bafda"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
            };

        </script>

    </body>


</html>