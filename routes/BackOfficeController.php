<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class BackOfficeController extends Controller
{

    public function home() {
        return view('index');
    }

}
