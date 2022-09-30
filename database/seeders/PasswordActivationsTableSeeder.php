<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasswordActivationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_activations')->delete();
        
        
        
    }
}