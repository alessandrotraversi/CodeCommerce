<?php

use Illuminate\Database\Seeder;
use CodeCommerce\Product;

class ProductTableSeeder extends Seeder
{
    public function run(){
        Product::truncate(); //elimina i dati dal DB
        factory('CodeCommerce\Product', 50)->create();
    }
}
