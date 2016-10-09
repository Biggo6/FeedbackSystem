<?php


class UserController  extends BaseController{
	public function manage(){
		return View::make('users.index');
	}
	public function store(){
		$userName    = Input::get('userName');
		$passWord    = Input::get('passWord');
		$userStatus  = Input::get('userStatus');
		$userRole    = Input::get('userRole');

		$user = new User;
		$user->username = $userName;
		$user->password = Hash::make($passWord);
		$user->role_id  = $userRole;
		$user->active   = $userStatus;


		$check = User::where('username', $userName)->count();
		if($check){
			return Response::json(["error"=>true, "msg"=>'Username already registered']);
		}else{
			$user->save();
			return Response::json(["error"=>false, "msg"=>'Successfully added!']);
		}
		
	}
	public function refresh(){
		return View::make('users.shared');
	}
	public function refreshWith(){
		return Redirect::back()->with('success', 'Successfully saved');
	}
}