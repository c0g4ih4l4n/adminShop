<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

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

    public function testView()
    {
        $list_product = Product::all();

        $data = array('list_product' => $list_product);

        return view('admin.product_list')->with($data);
    }
}
