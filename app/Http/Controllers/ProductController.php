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
