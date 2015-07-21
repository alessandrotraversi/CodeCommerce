<?php

use Illuminate\Database\Seeder;
use CodeCommerce\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate(); //elimina i dati dal DB
        factory('CodeCommerce\Category', 10)->create();
        
    }
}
