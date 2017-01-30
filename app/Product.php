<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['id', 'name', 'size', 'color', 'material', 'cost', 'quantity_remain', 'category_id', 'brand_id'];

    public $timestamp = false;
}
