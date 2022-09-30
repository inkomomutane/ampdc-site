<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NavigationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('navigations')->delete();
        
        \DB::table('navigations')->insert(array (
            0 => 
            array (
                'created_at' => '2022-09-20 09:58:51',
                'handle' => 'pages',
                'id' => 1,
                'settings' => '{"max_depth": 4, "collections": ["pages", "actividades"], "expects_root": true, "initial_path": null}',
                'title' => 'Pages',
                'updated_at' => '2022-09-20 09:59:59',
            ),
        ));
        
        
    }
}