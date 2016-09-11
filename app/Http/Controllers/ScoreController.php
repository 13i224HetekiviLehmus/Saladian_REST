<?php

namespace App\Http\Controllers;


use App\Score;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ScoreController extends Controller{


   public function index(Request $request){
		 if(isset($request->limit))
		 {
			 $scores  = Score::orderBy('score','desc')->take(intval($request->limit))->get();
		 }
		 else {
			 $scores  = Score::orderBy('score','desc')->get();
		 }
		 return response()->json($scores);
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
