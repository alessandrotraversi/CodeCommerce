<?php

use Illuminate\Database\Seeder;
use CodeCommerce\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate(); //elimina i dati dal DB
        factory('CodeCommerce\User', 5)->create();
        
    }
}
