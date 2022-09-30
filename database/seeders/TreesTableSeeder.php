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
        
        \DB::table('trees')->insert(array (
            0 => 
            array (
                'created_at' => '2022-09-20 09:11:28',
                'handle' => 'pages',
                'id' => 1,
                'locale' => 'default',
                'settings' => '{"initial_path": null}',
                'tree' => '[{"entry": 1}, {"entry": 2}, {"entry": 3}, {"entry": 4}]',
                'type' => 'collection',
                'updated_at' => '2022-09-20 10:28:38',
            ),
            1 => 
            array (
                'created_at' => '2022-09-20 09:58:51',
                'handle' => 'pages',
                'id' => 2,
                'locale' => 'default',
                'settings' => '{"initial_path": null}',
                'tree' => '[{"id": "bab36778-2aa4-496f-b557-6e8817d09f19", "entry": 2}, {"id": "d46cc20f-b25d-49a7-bdb9-928d05cba44d", "entry": 4}, {"id": "022d0a5f-d128-4555-ac0e-23d88e5a3f47", "entry": 1}, {"id": "faaafd55-eb13-424d-a5f5-d137b5fa6902", "entry": 3}]',
                'type' => 'navigation',
                'updated_at' => '2022-09-20 10:00:36',
            ),
            2 => 
            array (
                'created_at' => '2022-09-29 08:42:39',
                'handle' => 'life_histories',
                'id' => 3,
                'locale' => 'default',
                'settings' => '{"initial_path": null}',
                'tree' => '[{"entry": 5}, {"entry": 6}]',
                'type' => 'collection',
                'updated_at' => '2022-09-29 08:46:37',
            ),
        ));
        
        
    }
}