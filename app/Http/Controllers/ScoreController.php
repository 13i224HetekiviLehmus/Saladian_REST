<?php

namespace App\Http\Controllers;


use App\Score;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ScoreController extends Controller{


   public function index(){

       $Scores  = Score::orderBy('score','desc')->get();

       return response()->json($Scores);

   }

   public function createScore(Request $request){

       $Score = Score::create($request->all());

       return response()->json($Score);

   }

}
?>
