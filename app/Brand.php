<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';

    protected $fillable = ['id', 'name', 'number_of_products'];

    public $timestamp = false;


}
