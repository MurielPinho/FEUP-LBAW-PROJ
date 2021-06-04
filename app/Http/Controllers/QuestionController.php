<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\String_;

class QuestionController extends Controller
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
        echo("ola");
        $question = new Question();
        $question->message = $request->input('text');
        $question->buyer_id = $request->input('user_id');
        $question->product_id = $request->input('product_id');

        echo($question);

        $question->save();



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
