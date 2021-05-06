<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\String_;

class ProductController extends Controller
{
	public function list()
	{
       $products = Product::all();
       return view('productsearch', ['products' => $products] );

	}

    public function show(Request $request ,String $id)
	{

        $product = Product::find($id);

        return view('viewproduct', ['product' => $product]);

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
