<?php

namespace App;

use Illuminate\Http\Request;

use App\Presenters\ProductPresenter;
use McCool\LaravelAutoPresenter\HasPresenter;
use Illuminate\Database\Eloquent\Model;

use App\Category;
use App\Photo;

class Product extends Model implements HasPresenter
{
    protected $table = 'products';

    protected $fillable = ['id', 'name', 'size', 'color', 'material', 'cost', 'quantity_remain', 'category_id', 'brand_id'];

    public $timestamp = true;

    // relation belongsTo Category
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    // relation morph-many image
    public function photos()
    {
        return $this->morphMany('App\Photo', 'photo');
    }

    public function getPresenterClass()
    {
        return ProductPresenter::class;
    }

    /**
     * function create new object with request
     * @param  ProductCreateRequest $request request for create new product
     * @return Product           new object
     */
    public static function withRequest(Request $request)
    {
        $product = new self();

        $product->name            = $request->name;
        $product->sex             = $request->sex;
        $product->size            = $request->size;
        $product->color           = $request->color;
        $product->material        = $request->material;
        $product->cost            = $request->cost;
        $product->quantity_remain = $request->quantity_remain;
        $product->category_id     = $request->category_id;
        $product->brand_id        = $request->brand_id;

        return $product;
    }
}
