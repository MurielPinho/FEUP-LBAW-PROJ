<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Category;
use App\Models\CartProduct;
use App\Models\User;
use App\Models\Product;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\String_;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class CartController extends Controller
{


    public function increase (Request $request){

        $buyer_id = $request->input('buyer_id');
        $product_id = $request->input('product_id');
        $cart = CartProduct::where('buyer_id',Auth::user()->id)->where('product_id', '=', $product_id)->get();
        if(sizeof($cart) == 0) echo("vazio");
        $cart[0]->update(['quantity'=> $cart[0]->quantity +1 ]);
    }

    public function decrease (Request $request){
        $buyer_id = $request->input('buyer_id');
        $product_id = $request->input('product_id');
        $cart = CartProduct::where('buyer_id',Auth::user()->id)->where('product_id',$product_id)->get();
        if($cart[0]->quantity == 1){
            $cart[0]->delete();
        }else {
            $cart[0]->update(['quantity'=> $cart[0]->quantity -1 ]);
        }
    }

     public function update (Request $request){
        $buyer_id = $request->input('buyer_id');
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $cart = CartProduct::where('buyer_id',Auth::user()->id)->where('product_id',$product_id)->get();
        $cart[0]->update(['quantity'=> $quantity]);
    }

    public function add(Request $request)
    {
       $buyer_id = $request->input('buyer_id');
       $product_id = $request->input('product_id');
       $cart = CartProduct::where('buyer_id',Auth::user()->id)->where('product_id',$product_id)->get();

       if(sizeof($cart) == 0) {
           $newcart = new CartProduct();
           $newcart->product_id =  $product_id;
           $newcart->buyer_id =  $buyer_id;
           $newcart->quantity = 1;
           $newcart->save();
       }else {
        $cart[0]->update(['quantity'=> $cart[0]->quantity +1 ]);
       }

        return ;
    }

	public function list()
	{
       $carts = CartProduct::all()->sortBy('buyer_id');
       $addr = Address::where('id',Auth::user()->id)->get();
       echo $addr;
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

       public function show(Request $request )
	{
        $carts = CartProduct::where('buyer_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('viewcart', ['cart' => $carts]); ;

	}


}
