<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class MainPageController extends Controller
{

    public function home() {
        return view('index');
    }

}
