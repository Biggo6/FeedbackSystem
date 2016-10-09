<?php


class QuestionController extends BaseController{
	public function create(){
		return View::make('questions.create');
	}
	public function store(){
		$qnBody    = Input::get('qnBody');
		$publishQn = Input::get('publishQn');
		$qn 	   = new Question;
		$qn->body  = $qnBody;
		$qn->published = $publishQn;

		

		$check = Question::where('body', $qnBody)->count();
		if($check){
			return Response::json(["error"=>true, "msg"=>'Question already registered']);
		}else{
			$qn->save();
			return Response::json(["error"=>false, "msg"=>'Successfully added!']);
		}
		
	}
	public function refreshWith(){
		return Redirect::to('question/index')->with('success', 'Successfully added!');
	}
	public function index(){
		return View::make('questions.index');
	}
}