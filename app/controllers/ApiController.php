<?php

class ApiController extends BaseController{
	public function version(){
		return Response::json(["verison"=>"1.0.0", "vendor"=>"Izweb Technologies", "year"=>date('Y')]);
	}
	public function bizData(){
		$data = Biz::select('name')->get();
		return Response::json(["error"=>false, "msg"=> "", "code"=>800,  "data"=>$data ]);
	}
}