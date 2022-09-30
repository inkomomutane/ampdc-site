<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroupUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('group_user')->delete();
        
        
        
    }
}