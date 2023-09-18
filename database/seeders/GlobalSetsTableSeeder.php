<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GlobalSetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('global_sets')->delete();
        
        
        
    }
}