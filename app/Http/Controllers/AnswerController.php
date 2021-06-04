<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\String_;

class AnswerController extends Controller
{
	public function list()
	{


	}

    public function search(Request $r){

    }




    public function show(Request $request ,String $id)
	{


	}






	public function create(Request $request)
	{

        $answer = new Answer();
        $answer->answertext = $request->input('text');
        $answer->buyer_id = $request->input('user_id');
        $answer-> question_id = $request->input('question_id');

        echo($answer);

        $answer->save();



	}


	public function edit(Buyer $Buyer)
	{
    	// display edit form
	}

	public function update(Request $request, Buyer $Buyer)
	{
    	//
	}

	public function destroy(Request $r,String $id)
	{
        $buyer = Buyer::find($id);
        $buyer->delete();

        return $buyer;


	}
}
