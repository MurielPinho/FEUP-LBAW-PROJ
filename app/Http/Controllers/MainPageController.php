<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class MainPageController extends Controller
{

    public function home() {
        return view('index');
    }

    public function login() {
        return view('loginreg');
    }

    public function viewcart() {
        return view('viewcart');
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
