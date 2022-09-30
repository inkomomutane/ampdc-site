<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FieldsetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fieldsets')->delete();
        
        \DB::table('fieldsets')->insert(array (
            0 => 
            array (
                'created_at' => '2022-09-26 15:30:41',
                'data' => '{"title": "Hero", "fields": [{"field": {"icon": "assets", "mode": "list", "type": "assets", "display": "Hero Field Assets", "listable": "hidden", "restrict": false, "validate": ["required", "image"], "container": "hero_media_assets", "max_files": 1, "visibility": "visible", "always_save": false, "allow_uploads": true, "show_filename": true, "instructions_position": "above"}, "handle": "hero_field_assets"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Hero field title", "listable": "hidden", "validate": ["required", "string"], "input_type": "text", "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "hero_field_title"}]}',
                'handle' => 'hero',
                'id' => 1,
                'updated_at' => '2022-09-26 15:36:44',
            ),
        ));
        
        
    }
}