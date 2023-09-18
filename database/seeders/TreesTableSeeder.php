<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TreesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trees')->delete();
        
        
        
    }
}