<?php 
	
	$depts = SubDept::where('dept_id', $dept)->get();
	
?>
<option value="">--Select Sub Department --</option>

<?php if(count($depts)): ?>

@foreach ($depts as $d) 
	<option>{{$d->name}}</option>
@endforeach

<?php else: ?>
<option value="main">Main</option>
<?php endif; ?>
