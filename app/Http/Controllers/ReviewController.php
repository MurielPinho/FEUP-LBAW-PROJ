<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\String_;

class ReviewController extends Controller
{
	public function list()
	{
       $reviews = Review::all();

       foreach($reviews as $r) {
           echo $r->message , ' ' , $r->rating , ' <b>' , $r->buyer->name , '</b>';
           echo '<br>';
       }
       return;

	}

    public function show(Request $request ,String $id)
	{

        $r = Review::find($id);
        echo $r->message , ' ' , $r->rating , ' <b>' , $r->buyer->name , '</b>';
        return;

	}


    public function check_login (Request $request){

    }


	public function create(Request $request)
	{

	}


	public function edit(Buyer $Buyer)
	{
    	echo 'ola';
	}

	public function editPage(Request $request, String $id)
	{
        $product = Product::find($id);

        return view('viewproduct-edit', ['product' => $product]);
	}

	public function destroy(Buyer $Buyer)
	{
    	//
	}
}
