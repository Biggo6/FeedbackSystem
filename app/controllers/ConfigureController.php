<?php


class ConfigureController extends BaseController{
	public function system(){
		return View::make('system.update');
	}
	public function possibleSolns(){
		return View::make('system.possibleSolns');
	}
	public function departments(){
		return View::make('system.departments');
	}
	public function removeLogo(){
		$system    = HelperX::getSystem();
		$system->logo = "";
		$system->save();
	}
	public function permissions(){
		return View::make('system.permissions');
	}
	public function roles(){
		return View::make('system.roles');
	}
	public function rolesWith(){
		return Redirect::back()->with('success', 'Successfully added');
	}
	public function rolesStore(){
		$roleName    = Input::get('roleName');
		$roleStatus  = Input::get('roleStatus');
		$dp = new Role;
		$dp->role_name = $roleName;
		$dp->status  = $roleStatus;

		$check = Role::where('role_name', $roleName)->count();
		if($check){
			return Response::json(["error"=>true, "msg"=>'	Possible Solution already registered!']);
		}else{
			$dp->save();
			return Response::json(["error"=>false, "msg"=>'Successfully added!']);
		}
	}
	public function psolnsWith(){
		return Redirect::back()->with('success', 'Successfully added');
	}
	public function psolnsStore(){
		$solnName    = Input::get('solnName');
		$solnStatus  = Input::get('solnStatus');
		$dp = new PSoln;
		$dp->solution_name = $solnName;
		$dp->status  = $solnStatus;

		$check = PSoln::where('solution_name', $solnName)->count();
		if($check){
			return Response::json(["error"=>true, "msg"=>'	Possible Solution already registered!']);
		}else{
			$dp->save();
			return Response::json(["error"=>false, "msg"=>'Successfully added!']);
		}

		
	}
	public function subdeptDeptRefreshWith(){
		return Redirect::back()->with('success', 'Successfully added');
	}
	public function subdeptStore(){
		$deptName    = Input::get('deptName');
		$deptStatus  = Input::get('subDeptStatus');
		$subDeptName  = Input::get('subDeptName');
		$dp = new SubDept;
		$dp->dept_id = $deptName;
		$dp->name = $subDeptName;
		$dp->status  = $deptStatus;

		$check = SubDept::where('dept_id', $deptName)->where('name',$subDeptName)->count();
		if($check){
			return Response::json(["error"=>true, "msg"=>'	Sub-Department already registered!']);
		}else{
			$dp->save();
			return Response::json(["error"=>false, "msg"=>'Successfully added!']);
		}

		
	}
	public function deptDeptRefreshWith(){
		return Redirect::back()->with('success', 'Successfully added');
	}
	public function deptStore(){
		$deptName    = Input::get('deptName');
		$deptStatus  = Input::get('deptStatus');
		$dp = new Dept;
		$dp->dept_name = $deptName;
		$dp->status  = $deptStatus;

		$check = Dept::where('dept_name', $deptName)->count();
		if($check){
			return Response::json(["error"=>true, "msg"=>'Department already registered!']);
		}else{
			$dp->save();
			return Response::json(["error"=>false, "msg"=>'Successfully added!']);
		}

		
	}
	public function subDepartments(){
		return View::make('system.subDepartments');
	}
	public function systemStore(){
		$appName       = Input::get('appName');
		$appCopyRight  = Input::get('appCopyRight');
		$appTextEditor = Input::get('appTextEditor');
		 
		$system    = HelperX::getSystem();
		$system->app_name = $appName;
		$system->editor   = $appTextEditor;
		$system->footer_title = $appCopyRight;
		if (Input::hasFile('appLogo')) {
            $system->logo =  HelperX::uplodFileThenReturnPath('appLogo');
        }
		$system->save();
		return Response::json(["error"=>false, "msg"=>'Successfully added!']);
	}
	public function refreshWith(){
		return Redirect::back()->with('success', 'successfully updated!');
	}
}