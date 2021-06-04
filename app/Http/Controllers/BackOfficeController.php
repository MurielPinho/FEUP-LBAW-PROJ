<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use App\Models\Product;


class BackOfficeController extends Controller
{

    public function home() {
        return view('backoffice/index');
    }

    public function users(){
        $buyers = Buyer::all();
        return view('backoffice/manageusers' ,['buyers' => $buyers]);
    }
    public function settings(){
        return view('backoffice/contactsfaqs-edit');
    }
    public function products(){
        $products = Product::all();
        return view('backoffice/listproducts' ,['products' => $products]);
    }
    public function newproduct(){
        return view('backoffice/viewproduct-create');
    }

}
