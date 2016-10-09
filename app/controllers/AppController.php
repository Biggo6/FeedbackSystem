<?php


class AppController extends BaseController {
	public function login(){
		$creditx = Input::all();
		if(Auth::attempt($creditx)){
			HelperX::updateLogintime();
			return Redirect::to('dashboard');
		}else{
			return Redirect::back()->with('error', 'Invalid User!');
		}
	}
	public function dashboard(){
		return View::make('dashboard');
	}
	public function logout(){
		HelperX::updateLogouttime();
		Auth::logout();
		return Redirect::to('/');
	}
}