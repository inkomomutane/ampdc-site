<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AssetContainersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('asset_containers')->delete();
        
        \DB::table('asset_containers')->insert(array (
            0 => 
            array (
                'created_at' => '2022-09-27 08:32:32',
                'disk' => 'local',
                'handle' => 'hero_media_assets',
                'id' => 3,
                'settings' => '{"allow_moving": true, "search_index": null, "allow_uploads": true, "allow_renaming": true, "create_folders": true, "allow_downloading": true}',
                'title' => 'Hero media assets',
                'updated_at' => '2022-09-27 08:32:32',
            ),
        ));
        
        
    }
}