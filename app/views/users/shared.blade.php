 <table id="datatable" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Status</th>
            <th>Role</th>
            <th>Login Time</th>
            <th>Logout Time</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>


    <tbody>

    	<?php $i = 1;
        $users = User::orderBy('created_at', 'DESC')->get();
        ?>

        @foreach($users as $u)
        <tr>
            <td>{{$i}}</td>
            <td>{{$u->username}}</td>
            <td>{{HelperX::getStatus($u->active)}}</td>
            <td>{{HelperX::getRole($u->role_id)}}</td>
            <td> {{HelperX::getLoginTime($u->id)}}</td>
            <td> {{HelperX::getLogoutTime($u->id)}}</td>
            <td>{{Carbon::parse($u->created_at)->format('Y-m-d h:i:s')}}</td>
            <td>
            	<span style="cursor: pointer"  class="label label-primary" onclick="" url="" title="Edit This Record" rowid=""><i class="fa fa-edit"></i></span>
            	<span style="cursor: pointer"  class="label label-danger" onclick="" url="" title="Delete This Record" rowid=""><i class="fa fa-trash"></i></span>
            </td>
        </tr>
        <?php $i++; ?>
        @endforeach

    </tbody>
</table>




