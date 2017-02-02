<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Sh Vna',
            'sex' => 0,
            'size' => '20,21,22',
            'color' => 'Red',
            'material' => 'Cotton',
            'cost' => 100,
            'quantity_remain' => 1012,
            'category_id' => 1,
            'brand_id' => 1,
        ]);
    }
}
