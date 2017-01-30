<?php

namespace App;

use App\Presenters\ProductPresenter;
use McCool\LaravelAutoPresenter\HasPresenter;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements HasPresenter
{
    protected $table = 'products';

    protected $fillable = ['id', 'name', 'size', 'color', 'material', 'cost', 'quantity_remain', 'category_id', 'brand_id'];

    public $timestamp = false;

    public function getPresenterClass()
    {
        return ProductPresenter::class;
    }
}
