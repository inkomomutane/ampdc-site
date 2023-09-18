<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PasswordActivationTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_activation_tokens')->delete();
        
        
        
    }
}