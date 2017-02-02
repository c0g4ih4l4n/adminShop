<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['id', 'name', 'number_of_products'];

    protected $timestamp = true;

    /**
     * Create new object with CategoryCreateRequest
     * @param  Request $request
     * @return Category           new object created
     */
    public static function withRequest(Request $request)
    {
        $cate = new self();

        $cate->name               = $request->name;
        $cate->number_of_products = 0;

        return $cate;
    }

    public static function getLastId()
    {
        if (self::count() == 0)
        {
            return 0;
        }
        return self::all()->last();
    }
}
