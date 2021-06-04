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
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class CartController extends Controller
{


    public function increase (Request $request){

       $buyer_id = $request->input('buyer_id');
       $product_id = $request->input('product_id');
        $cart = CartProduct::where('buyer_id',$buyer_id)->where('product_id',$product_id)->get();
        echo($buyer_id);
        echo($product_id);
        echo($cart);
        if(sizeof($cart) == 0) echo("vazio");
        $cart[0]->update(['quantity'=> $cart[0]->quantity +1 ]);
    }

    public function decrease (Request $request){
        $buyer_id = $request->input('buyer_id');
        $product_id = $request->input('product_id');
        $cart = CartProduct::where('buyer_id',$buyer_id)->where('product_id',$product_id)->get();
        if($cart[0]->quantity == 1){
            $cart[0]->delete();
        }else {
            $cart[0]->update(['quantity'=> $cart[0]->quantity -1 ]);
        }



    }

    public function add(Request $request)
    {
       $buyer_id = $request->input('buyer_id');
       $product_id = $request->input('product_id');
       $cart = CartProduct::where('buyer_id',$buyer_id)->where('product_id',$product_id)->get();

       if(sizeof($cart) == 0) {
           $newcart = new CartProduct();
           $newcart->product_id =  $product_id;
           $newcart->buyer_id =  $buyer_id;
           $newcart->quantity = 1;
           $newcart->save();
       }else {
        echo($cart[0]->quantity);
        $cart[0]->update(['quantity'=> $cart[0]->quantity +1 ]);
       }

        return ;
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

       public function show(Request $request )
	{
        $carts = CartProduct::where('buyer_id',Auth::user()->id)->get();
       // echo($carts);

        return view('viewcart', ['cart' => $carts]); ;

	}


}
