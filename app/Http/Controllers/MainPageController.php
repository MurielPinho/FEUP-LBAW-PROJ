<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CartProduct;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class MainPageController extends Controller
{

    public function home() {
        $p = Product::orderBy('id')->get();
        return view('index' , ['products' => $p]);
    }

    public function login() {
        return view('loginreg');
    }

    public function viewcart() {
        $cart = CartProduct::where('buyer_id',Auth::user()->id)->get();
        return view('viewcart', ['cart' => $cart]);
    }

     public function checkout() {
        $cart = CartProduct::where('buyer_id',Auth::user()->id)->get();
        return view('checkout', ['cart' => $cart]);
    }

    public function delivery() {
        return view('delivery');
    }

    public function payment() {
        return view('payment');
    }

    public function review() {
        return view('review');
    }

    public function productsearch() {
        return view('productsearch');
    }

    public function contactsfaqs() {
        return view('contactsfaqs');
    }

    public function viewproduct() {
        return view('viewproduct');
    }


}
