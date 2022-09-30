<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RevisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('revisions')->delete();
        
        
        
    }
}