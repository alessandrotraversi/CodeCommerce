<?php

use Illuminate\Database\Seeder;
use CodeCommerce\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate(); //elimina i dati dal DB
        factory('CodeCommerce\Tag', 10)->create();
    }
}