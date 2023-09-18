<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaxonomiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('taxonomies')->delete();
        
        \DB::table('taxonomies')->insert(array (
            0 => 
            array (
                'id' => 2,
                'handle' => 'categories',
                'title' => 'Categories',
                'sites' => '["default"]',
                'settings' => '{"revisions": false, "preview_targets": [{"label": "Term", "format": "{permalink}", "refresh": true}]}',
                'created_at' => '2023-09-17 12:43:04',
                'updated_at' => '2023-09-17 12:43:04',
            ),
        ));
        
        
    }
}