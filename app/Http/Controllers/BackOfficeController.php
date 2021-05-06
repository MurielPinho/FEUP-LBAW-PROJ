<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class BackOfficeController extends Controller
{

    public function home() {
        return view('backoffice/index');
    }

    public function users(){
        return view('backoffice/manageusers');
    }
    public function settings(){
        return view('backoffice/contactsfaqs-edit');
    }
    public function products(){
        return view('backoffice/listproducts');
    }
    public function newproduct(){
        return view('backoffice/viewproduct-create');
    }

}
