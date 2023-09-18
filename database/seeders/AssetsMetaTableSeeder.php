<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AssetsMetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('assets_meta')->delete();
        
        \DB::table('assets_meta')->insert(array (
            0 => 
            array (
                'id' => 7,
                'handle' => 'assets::./.meta/avatar.png.yaml',
                'data' => '{"data": [], "size": 8637389, "width": 2511, "height": 2511, "duration": null, "mime_type": "image/png", "last_modified": 1694988328}',
                'created_at' => '2023-09-17 22:05:28',
                'updated_at' => '2023-09-17 22:05:28',
            ),
        ));
        
        
    }
}