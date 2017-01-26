<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    /**
     * The interface of Admin control panel
     */
    public function home()
    {
        return view('layouts.main');
    }

    public function echoConstant()
    {
        echo config('constants.ProductManager');
    }
}
