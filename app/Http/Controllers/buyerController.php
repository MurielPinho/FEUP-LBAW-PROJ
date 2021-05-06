<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\String_;

class BuyerController extends Controller
{
	public function list()
	{
       $buyers = Buyer::all();
       foreach ($buyers as $buyer){
            echo $buyer->email ;
       }

       return;

	}

    public function show(Request $request ,String $id)
	{
        $buyer = Buyer::find($id);
        echo $buyer;
       return;

	}


    public function check_login (Request $request){

    }


	public function create(Request $request)
	{
        $buyer = new Buyer();
        $buyer->name = $request->input('name');
        $buyer->email = $request->input('email');
        $buyer->phonenumber = $request->input('phonenumber');
        $buyer->password = Hash::make($request->input('password')) ;

        $buyer->save();

        return $buyer;


	}


	public function edit(Buyer $Buyer)
	{
    	// display edit form
	}

	public function update(Request $request, Buyer $Buyer)
	{
    	//
	}

	public function destroy(Buyer $Buyer)
	{
    	//
	}
}
