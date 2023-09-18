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
                'id' => 1,
                'handle' => 'assets',
                'title' => 'Assets',
                'disk' => 'public',
                'settings' => '{"allow_moving": true, "search_index": null, "warm_presets": null, "allow_uploads": true, "source_preset": null, "allow_renaming": true, "create_folders": true, "allow_downloading": true}',
                'created_at' => '2023-09-17 07:13:20',
                'updated_at' => '2023-09-17 07:13:20',
            ),
        ));
        
        
    }
}