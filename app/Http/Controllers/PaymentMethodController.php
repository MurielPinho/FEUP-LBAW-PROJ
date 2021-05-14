<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\PaymentMethod;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\String_;

class CartController extends Controller
{
        public function add(Request $request,String $id){
                echo 'ola';
                return ;
        }

        public function list(){
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

        public function show(Request $request ,String $id){
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

        public function show1(Request $request ,String $id){
                $cart = CartProduct::where('buyer_id',$id)->get();

                return view('viewcart', ['cart' => $cart]);

        }


}
