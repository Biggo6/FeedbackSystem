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
	public function subDepartments(){
		return View::make('system.subDepartments');
	}
}