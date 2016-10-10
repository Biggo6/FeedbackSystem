<?php


class QuestionController extends BaseController{
	public function create(){
		return View::make('questions.create');
	}

	public function getSubDepart(){
		$dept = Input::get('dept');
		return View::make('system.subdepts', compact('dept'));
	}

	public function storeSurvey(){
		$feedback   = str_replace("{", "", Input::get('feedback'));
		$feedback_  = str_replace("}", "", $feedback);
		$arr        = explode(",",$feedback_);
		$neArr = [];
		foreach ($arr as $key => $value) {
			$qn_id  = explode("_", str_replace('"', '', explode(":",$value)[0])) [2];
			$qn_ans = explode(":",$value)[1];
			$deptName = Input::get('deptName');
			$subdeptName = Input::get('subdeptName');
			$f = new Feedback;
			$f->department = $deptName;
			$f->subdepartment = $subdeptName;
			$f->qn_id = $qn_id;
			$f->qn_answer = $qn_ans;
			$f->save();
		}
		
	}

	public function destroy($id){
		Question::find($id)->delete();
		return Redirect::back()->with('success', 'Successfully deleted!');
	}

	public function takeSurvey(){
		sleep(1);
		$pages = Question::orderBy('created_at', 'DESC')->where('published', 1)->get();

		if(count($pages)){
			$jsonData = [];
			$i = 1;
			foreach ($pages as $p) {
				$p =[	"name"=> "page".$p->id,
						"questions"=>[[
									 "type"=>"rating",
									 "maximumRateDescription"=>$p->maximumRateDescription, 
									 "mininumRateDescription"=>$p->manimumRateDescription, 
									 "name"=> "qn_id_" . $p->id, 
									 "title"=>$p->body,
									 "isRequired"=>($p->isRequired == 1) ? true : false
									]]
					];
					$jsonData[] = $p;
					$i++;
			}
			return Response::json(["pages"=>$jsonData]);
		}else{
			return Response::json([]);
		}
	}

	public function getpreview(){
		sleep(2);
		$pages = Question::orderBy('created_at', 'DESC')->where('published', 1)->get();

		if(count($pages)){
			$jsonData = [];
			$i = 1;
			foreach ($pages as $p) {
				$p =[	"name"=> "page".$p->id,
						"questions"=>[[
									 "type"=>"rating",
									 "maximumRateDescription"=>$p->maximumRateDescription, 
									 "mininumRateDescription"=>$p->manimumRateDescription, 
									 "name"=>$p->ratename, 
									 "title"=>$p->body,
									 "isRequired"=>($p->isRequired == 1) ? true : false
									]]
					];
					$jsonData[] = $p;
					$i++;
			}
			return Response::json(["pages"=>$jsonData]);
		}else{
			return Response::json([]);
		}

		
	}

	public function store(){
		$qnBody        = Input::get('qnBody');
		$publishQn     = Input::get('publishQn');
		$isRequired    = Input::get("RequiredQn");
		$maximumRateDescription = Input::get('maximumRateDescription');
		$manimumRateDescription = Input::get('manimumRateDescription');
		$RateDescription        = Input::get('RateDescription');
		$rateValues             = Input::get('rateValues');

		$qn 	       = new Question;
		$qn->body      = $qnBody;
		$qn->published = $publishQn;
		$qn->isRequired = $isRequired;
		$qn->maximumRateDescription = $maximumRateDescription;
		$qn->manimumRateDescription = $manimumRateDescription;
		$qn->rateValues = $rateValues;
		$qn->ratename = $RateDescription;

		if($rateValues == 5){
			$qnJson = ["questions"=>["type"=>"rating", "maximumRateDescription"=>$maximumRateDescription, "mininumRateDescription"=>$manimumRateDescription, "name"=>$RateDescription, "title"=>$qnBody]];
		}else{
			//custom codes goes here
			$qnJson = ["questions"=>["type"=>"rating", "maximumRateDescription"=>$maximumRateDescription, "mininumRateDescription"=>$manimumRateDescription, "name"=>$RateDescription, "title"=>$qnBody]];
		}

		$qn->json_format = serialize($qnJson);

	
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
	public function preview(){
		return View::make('questions.preview');
	}
}