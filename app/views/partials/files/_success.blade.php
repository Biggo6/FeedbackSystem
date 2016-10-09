@if(Session::has('success'))
<div class="alert alert-success flush">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<strong>{{Session::get('success')}}</strong>
</div>

<script src="{{url('izgram/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript">
$(function(){
	$('.flush').delay(2000).fadeOut();
});
</script>
@endif