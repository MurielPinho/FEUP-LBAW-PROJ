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




	public function create(Request $request)
	{
        $product = new Product();
        $product->name =  "New Product";
        $product->category_id = 1;
        $product->price = 50;
        $product->description = "New Description";
        $product->quantity = 1;
        $product->save();

        return view('viewproduct', ['product' => $product]);



	}


	public function update(Request $r, String $id)
	{
        echo($id);


        $name = $r->input('name');
        $price = $r->input('price');
        $description = $r->input('description');
        $category = $r->input('category');

        $product = Product::find($id);
        $product->update(['name'=>  $name, 'price' => $price , 'description' => $description , 'category_id' => $category]);
	}

	public function editPage(Request $request, String $id)
	{
        $product = Product::find($id);

        return view('viewproduct-edit', ['product' => $product]);
	}

	public function destroy(Buyer $Buyer ,String $id)
	{
        $product = Product::find($id);
        $product->delete();

        return $product;
	}


	public function upload(Request $r )
	{
        error_log("ola");

	}
}
