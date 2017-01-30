<?php

namespace App\Presenters;

use Carbon\Carbon;
use App\Product;
use App\Category;
use App\Brand;
use McCool\LaravelAutoPresenter\BasePresenter;

class ProductPresenter extends BasePresenter
{
    public function category()
    {
        $category_id = $this->wrappedObject->category_id;

        return Category::find($category_id)->name;
    }

    public function brand()
    {
        $brand_id = $this->wrappedObject->brand_id;

        return Brand::find($brand_id)->name;
    }
}