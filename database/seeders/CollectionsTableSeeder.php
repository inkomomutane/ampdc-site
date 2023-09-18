<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CollectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('collections')->delete();
        
        \DB::table('collections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'handle' => 'events',
                'title' => 'Events',
                'settings' => '{"dated": false, "mount": null, "sites": null, "slugs": true, "inject": [], "layout": null, "routes": [], "sort_dir": null, "template": null, "propagate": false, "revisions": false, "structure": null, "sort_field": null, "taxonomies": [], "search_index": null, "title_formats": [], "default_status": true, "origin_behavior": "select", "preview_targets": [{"label": "Entry", "format": "{permalink}", "refresh": true}], "past_date_behavior": "public", "future_date_behavior": "private"}',
                'created_at' => '2023-09-17 07:06:59',
                'updated_at' => '2023-09-17 07:06:59',
            ),
            1 => 
            array (
                'id' => 2,
                'handle' => 'articles',
                'title' => 'Articles',
                'settings' => '{"dated": false, "mount": null, "sites": null, "slugs": true, "inject": [], "layout": null, "routes": [], "sort_dir": null, "template": null, "propagate": false, "revisions": false, "structure": null, "sort_field": null, "taxonomies": [], "search_index": null, "title_formats": [], "default_status": true, "origin_behavior": "select", "preview_targets": [{"label": "Entry", "format": "{permalink}", "refresh": true}], "past_date_behavior": "public", "future_date_behavior": "private"}',
                'created_at' => '2023-09-17 12:02:47',
                'updated_at' => '2023-09-17 12:02:47',
            ),
            2 => 
            array (
                'id' => 3,
                'handle' => 'success_histories',
                'title' => 'Success Histories',
                'settings' => '{"dated": false, "mount": null, "sites": null, "slugs": true, "inject": [], "layout": null, "routes": [], "sort_dir": null, "template": null, "propagate": false, "revisions": false, "structure": null, "sort_field": null, "taxonomies": [], "search_index": null, "title_formats": [], "default_status": true, "origin_behavior": "select", "preview_targets": [{"label": "Entry", "format": "{permalink}", "refresh": true}], "past_date_behavior": "public", "future_date_behavior": "private"}',
                'created_at' => '2023-09-17 22:01:54',
                'updated_at' => '2023-09-17 22:01:54',
            ),
        ));
        
        
    }
}