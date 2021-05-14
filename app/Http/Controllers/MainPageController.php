<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CartProduct;


class MainPageController extends Controller
{

    public function home() {
        return view('index');
    }

    public function login() {
        return view('loginreg');
    }

    public function viewcart() {
        $cart = CartProduct::where('buyer_id',2)->get();
        return view('viewcart', ['cart' => $cart]);
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
