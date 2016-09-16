<?php

namespace App\Http\Controllers;


use App\Score;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ScoreController extends Controller{

   public function index(){
		$headers = [ 'Content-Type' => 'application/json; charset=utf-8' ];
		 $scores  = Score::orderBy('score','desc')->get();
		 return response()->json($scores, 200, $headers, JSON_UNESCAPED_UNICODE);
   }

	 public function limit($limit){
		$headers = [ 'Content-Type' => 'application/json; charset=utf-8' ];
		$scores  = Score::orderBy('score','desc')->take(intval($limit))->get();
		return response()->json($scores, 200, $headers, JSON_UNESCAPED_UNICODE);
   }

   public function createScore(Request $request){

       $score = new Score;

			 $score->name = $request->name;
			 $score->score = intval($request->score);

			if($score->save())
			{
				return response()->json(1);
			}
			else {
				return response()->json(0);
			}
   }

}
?>
