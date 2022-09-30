<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetsMetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('assets_meta')->delete();

        DB::table('assets_meta')->insert(array (
            0 =>
            array (
                'created_at' => '2022-09-26 15:27:31',
                'data' => '{"data": [], "size": 457380, "width": 980, "height": 418, "duration": null, "mime_type": "image/png", "last_modified": 1664206051}',
                'handle' => 'hero_media_assets::./.meta/sumburero.png.yaml',
                'id' => 1,
                'updated_at' => '2022-09-26 15:27:31',
            ),
            1 =>
            array (
                'created_at' => '2022-09-26 15:27:35',
                'data' => '{"data": {"alt": "Sessões temáticas."}, "size": 143584, "width": 1152, "height": 864, "duration": null, "mime_type": "image/jpeg", "last_modified": 1664206055}',
                'handle' => 'hero_media_assets::./.meta/home.jpg.yaml',
                'id' => 2,
                'updated_at' => '2022-09-27 08:35:26',
            ),
            2 =>
            array (
                'created_at' => '2022-09-26 15:27:38',
                'data' => '{"data": [], "size": 144837, "width": 372, "height": 279, "duration": null, "mime_type": "image/png", "last_modified": 1664206058}',
                'handle' => 'hero_media_assets::./.meta/formacao_violencia.png.yaml',
                'id' => 3,
                'updated_at' => '2022-09-26 15:27:38',
            ),
            3 =>
            array (
                'created_at' => '2022-09-27 07:16:23',
                'data' => '{"data": [], "size": 150105, "width": 1366, "height": 768, "duration": null, "mime_type": "image/png", "last_modified": 1664262983}',
                'handle' => 'hero_media_assets::./.meta/screenshot-from-2022-09-25-18-03-21.png.yaml',
                'id' => 4,
                'updated_at' => '2022-09-27 07:16:23',
            ),
            4 =>
            array (
                'created_at' => '2022-09-27 08:30:29',
                'data' => '{"data": [], "size": 39521, "width": 557, "height": 557, "duration": null, "mime_type": "image/png", "last_modified": 1664267429}',
                'handle' => 'hero_media_assets::public/.meta/logo.png.yaml',
                'id' => 6,
                'updated_at' => '2022-09-27 08:30:29',
            ),
        ));


    }
}
