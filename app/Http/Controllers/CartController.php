<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Category;
use App\Models\CartProduct;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\String_;

class CartController extends Controller
{
    public function add(Request $request,$id)
    {
        
        $product = new CartProduct();
        $product->buyer_id = 2;
        $product->product_id = $id;
        $product->quantity = 1;
        $product->save();

        return redirect('viewcart');
      
    }

	public function list()
	{
       $carts = CartProduct::all()->sortBy('buyer_id');
       foreach ($carts as $cart){
            echo $cart->buyer_id;
            echo " : ";
            echo $cart->product_id;
            echo " : ";
            echo $cart->quantity ;
            echo "<br>";
       }
       return;

	}

       public function show(Request $request ,String $id)
	{
        $carts = CartProduct::where('buyer_id',$id)->get();
        foreach ($carts as $cart){
            echo $cart->buyer_id;
            echo " : ";
            echo $cart->product_id;
            echo " : ";
            echo $cart->quantity ;
            echo "<br>";
       }
        
        return ;

	}


}
