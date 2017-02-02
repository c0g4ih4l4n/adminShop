<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Brand;

use Illuminate\Http\Request;
use App\Http\Requests\ProductCreateRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;

class ProductController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->middleware('checkrole:ProductManager');
        $this->user = Auth::user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_product = Product::all();

        $data = array('list_product' => $list_product);

        return view('admin.product_list')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array('list_category' => Category::all(),
            'list_brand' => Brand::all()
            );

        return view('admin.product_add')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ProductCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCreateRequest $request)
    {
        $product = Product::withRequest($request);

        $product->save();

        // return Redirect::route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
