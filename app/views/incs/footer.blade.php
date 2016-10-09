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
                    height: 250,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: true,                 // set focus to editable area after initializing summernote
                    callbacks: {
                        onImageUpload: function(files, editor, $editable) {
                            alert('evoked');
                            //sendFile(files[0],editor,$editable);
                        }
                    }
                });

               

            });
        </script>

        <script type="text/javascript">
        window.onload = function(){

            var fileInput = document.getElementById('appLogo');


            var fileDisplayArea = document.getElementById('logo-placeholder');

            @if(HelperX::getSystem()->logo != "")
                    fileDisplayArea.innerHTML = "";

                    // Create a new image.
                    var img = new Image();
                    // Set the img src property using the data URL.
                    img.width = 250;
                    img.height = 250;
                    img.src = '{{HelperX::getSystem()->logo}}';

                    // Add the image to the page.
                    fileDisplayArea.appendChild(img);
                    $(fileDisplayArea).append("<br/><hr/><label class='label label-danger' style='cursor:pointer' id='removeLogo'><i class='fa fa-trash'></i> REMOVE PHOTO</label>");
            @endif


            fileInput.addEventListener('change', function(e) {
                var file = fileInput.files[0];
                var imageType = /image.*/;

                if (file.type.match(imageType)) {
                  var reader = new FileReader();

                  reader.onload = function(e) {
                    fileDisplayArea.innerHTML = "";

                    // Create a new image.
                    var img = new Image();
                    // Set the img src property using the data URL.
                    img.width = 250;
                    img.height = 250;
                    img.src = reader.result;

                    // Add the image to the page.
                    fileDisplayArea.appendChild(img);
                    $(fileDisplayArea).append("<br/><hr/><label class='label label-danger' style='cursor:pointer' id='removeLogo'><i class='fa fa-trash'></i> REMOVE PHOTO</label>");

                  }

                  reader.readAsDataURL(file);
                } else {
                  $('#logo-placeholder').html('');
                  var $el = $('#appLogo');
                  $el.wrap('<form>').closest('form').get(0).reset();
                  $el.unwrap();     
                  fileDisplayArea.innerHTML = "<label class='label label-danger'><i class='fa fa-warning'></i> File not supported!</label>";
                  fileDisplayArea.style.borderRadius = "4px";
                  fileDisplayArea.style.border       = "1px solid #ccc";
                  fileDisplayArea.style.padding      = "2px";
                  return false;
                }
            });

        }
</script>
<script type="text/javascript">
$(function(){
    $('body').on('click', '#removeLogo', function(){
        alert(34)
        $('#logo-placeholder').html('');
        //var $el = $('#logo');
        //$el.wrap('<form>').closest('form').get(0).reset();
        //$el.unwrap();
        var data = {el:1};
        Biggo.talkToServer('{{route("system.removeLogo")}}', data).then(function(res){
                
        });
    });
});
</script>

        <script src="{{url('bootstrap-filestyle/src/bootstrap-filestyle.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{url('izgram/assets/pages/datatables.init.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();
                $('#datatable-2').DataTable();
                $('#datatable-3').DataTable();
                $('#datatable-4').DataTable();
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
            $('#deptSave').on('click', function(){
                var registerForm = $('#registerForm_Dept').validationEngine('validate');
                if(registerForm){
                   var data = Biggo.serializeData(registerForm_Dept); 
                   Biggo.applyOpacity(registerForm_Dept);
                   Biggo.disableEl(deptSave);
                   Biggo.talkToServer('{{route("dept.store")}}', data).then(function(res){
                        Biggo.removeOpacity(registerForm_Dept);
                        Biggo.enableEl(deptSave);
                    
                        if(res.error){
                            Biggo.showFeedBack(registerForm_Dept, res.msg, res.error);
                        }else{
                            Biggo.resetForm(registerForm_Dept);
                            window.location = "{{route('dept.refreshWith')}}"; 
                        }
                        
                   });
                }
            });
            $('#roleSave').on('click', function(){
                var registerForm = $('#registerForm_Role').validationEngine('validate');
                if(registerForm){
                    var data = Biggo.serializeData(registerForm_Role); 
                   Biggo.applyOpacity(registerForm_Role);
                   Biggo.disableEl(roleSave);
                   Biggo.talkToServer('{{route("roles.store")}}', data).then(function(res){
                        Biggo.removeOpacity(registerForm_Role);
                        Biggo.enableEl(roleSave);
                    
                        if(res.error){
                            Biggo.showFeedBack(registerForm_Role, res.msg, res.error);
                        }else{
                            Biggo.resetForm(registerForm_Role);
                            window.location = "{{route('roles.refreshWith')}}"; 
                        }
                        
                   });
                }
            });
            $('#solnSave').on('click', function(){
                var registerForm = $('#registerForm_Solns').validationEngine('validate');
                if(registerForm){
                     var data = Biggo.serializeData(registerForm_Solns); 
                   Biggo.applyOpacity(registerForm_Solns);
                   Biggo.disableEl(solnSave);
                   Biggo.talkToServer('{{route("psolns.store")}}', data).then(function(res){
                        Biggo.removeOpacity(registerForm_Solns);
                        Biggo.enableEl(solnSave);
                    
                        if(res.error){
                            Biggo.showFeedBack(registerForm_Solns, res.msg, res.error);
                        }else{
                            Biggo.resetForm(registerForm_Solns);
                            window.location = "{{route('psolns.refreshWith')}}"; 
                        }
                        
                   });
                }
            });
            $('#deptSubSave').on('click', function(){
                 var registerForm = $('#registerForm_Sub').validationEngine('validate');
                if(registerForm){
                    var data = Biggo.serializeData(registerForm_Sub); 
                   Biggo.applyOpacity(registerForm_Sub);
                   Biggo.disableEl(deptSubSave);
                   Biggo.talkToServer('{{route("subdept.store")}}', data).then(function(res){
                        Biggo.removeOpacity(registerForm_Sub);
                        Biggo.enableEl(deptSubSave);
                    
                        if(res.error){
                            Biggo.showFeedBack(registerForm_Sub, res.msg, res.error);
                        }else{
                            Biggo.resetForm(registerForm_Sub);
                            window.location = "{{route('subdept.refreshWith')}}"; 
                        }
                        
                   });
                }
            });
            $('#systemSave').on('click', function(){
                var registerForm = $('#registerForm_App').validationEngine('validate');
                if(registerForm){

                    var isFileUpload = false;
                    var data;
                    if(Biggo.isFileValueSetted(appLogo) != undefined){
                        var arr  = Biggo.serializeData(registerForm_App);
                        var arr2 = ["appLogo"];
                        isFileUpload = true;
                        data = Biggo.prepareFormData(arr, arr2);
                    }else{
                        data = Biggo.serializeData(registerForm_App);
                    }

                   Biggo.applyOpacity(registerForm_App);
                   Biggo.disableEl(systemSave);
                   Biggo.talkToServer('{{route("system.store")}}', data, isFileUpload).then(function(res){
                        Biggo.removeOpacity(registerForm_App);
                        Biggo.enableEl(systemSave);
                    
                        if(res.error){
                            Biggo.showFeedBack(registerForm_App, res.msg, res.error);
                        }else{
                            Biggo.resetForm(registerForm_App);
                            //Biggo.showFeedBack(registerForm_App, res.msg, res.error);
                            window.location = "{{route('system.refreshWith')}}"; 
                        }
                        
                   });
                }
            });
            $('.register').on('click', function(){


                    var markupStr = $('#qnBody').val();
                    if(markupStr == ""){
                         Biggo.showFeedBack(registerForm_Qn, 'Please fill the question body!', true);
                    }else{
                        var register = $(this).attr('register');
                       
                        var registerForm = $('#registerForm_Qn').validationEngine('validate');
                        if(registerForm){
                           var data = Biggo.serializeData(registerForm_Qn); 
                           Biggo.applyOpacity(registerForm_Qn);
                           
                           Biggo.talkToServer('{{route("question.store")}}', data).then(function(res){
                                Biggo.removeOpacity(registerForm_Qn);
                                
                            
                                if(res.error){
                                    Biggo.showFeedBack(registerForm_Qn, res.msg, res.error);
                                }else{
                                    if(register == "save"){
                                        window.location = "{{route('question.refreshWith')}}"; 
                                    }
                                
                                }
                                
                           });
                        }
                    }
                    
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