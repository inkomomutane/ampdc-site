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
                'created_at' => '2022-09-29 13:02:29',
                'handle' => 'akulo_akulo',
                'id' => 1,
                'settings' => '{"revisions": false}',
                'sites' => '["default"]',
                'title' => 'Akulo Akulo',
                'updated_at' => '2022-09-29 13:02:29',
            ),
        ));
        
        
    }
}