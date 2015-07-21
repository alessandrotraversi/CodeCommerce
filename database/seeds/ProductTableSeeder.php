<?php

use Illuminate\Database\Seeder;
use CodeCommerce\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate(); //elimina i dati dal DB
        factory('CodeCommerce\Product', 50)->create();
    }
}
