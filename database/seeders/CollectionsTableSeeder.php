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
                'created_at' => '2022-09-20 09:08:32',
                'handle' => 'pages',
                'id' => 1,
                'settings' => '{"dated": true, "mount": null, "sites": null, "slugs": true, "inject": [], "layout": "layout", "routes": "/{slug}", "ampable": false, "sort_dir": "asc", "template": "pages/index", "propagate": false, "revisions": false, "structure": {"root": true, "slugs": true, "max_depth": 4}, "sort_field": "title", "taxonomies": [], "search_index": null, "title_formats": [], "default_status": true, "preview_targets": [{"label": "Entry", "format": "{permalink}"}], "past_date_behavior": "public", "future_date_behavior": "private"}',
                'title' => 'Pages',
                'updated_at' => '2022-09-20 09:31:10',
            ),
            1 => 
            array (
                'created_at' => '2022-09-20 09:12:31',
                'handle' => 'actividades',
                'id' => 2,
                'settings' => '{"dated": true, "mount": null, "sites": null, "slugs": true, "inject": [], "layout": "layout", "routes": "/actividades/{slug}", "ampable": false, "sort_dir": "asc", "template": "pages/posts/index", "propagate": false, "revisions": false, "structure": null, "sort_field": "title", "taxonomies": ["akulo_akulo"], "search_index": null, "title_formats": [], "default_status": true, "preview_targets": [{"label": "Entry", "format": "{permalink}"}], "past_date_behavior": "public", "future_date_behavior": "private"}',
                'title' => 'Actividades',
                'updated_at' => '2022-09-30 04:22:33',
            ),
            2 => 
            array (
                'created_at' => '2022-09-29 08:32:52',
                'handle' => 'life_histories',
                'id' => 4,
                'settings' => '{"dated": true, "mount": null, "sites": null, "slugs": true, "inject": [], "layout": "pages/projects/index", "routes": "stories/{slug}", "ampable": false, "sort_dir": "asc", "template": "default", "propagate": false, "revisions": false, "structure": {"root": false}, "sort_field": "title", "taxonomies": ["akulo_akulo"], "search_index": null, "title_formats": [], "default_status": true, "preview_targets": [{"label": "Entry", "format": "{permalink}"}], "past_date_behavior": "public", "future_date_behavior": "private"}',
                'title' => 'Life Histories',
                'updated_at' => '2022-09-29 13:03:00',
            ),
            3 => 
            array (
                'created_at' => '2022-09-29 09:17:53',
                'handle' => 'projects',
                'id' => 5,
                'settings' => '{"dated": true, "mount": null, "sites": null, "slugs": true, "inject": [], "layout": "layout", "routes": "projects/{slug}", "ampable": false, "sort_dir": "asc", "template": "pages/projects/show", "propagate": false, "revisions": false, "structure": null, "sort_field": "title", "taxonomies": [], "search_index": null, "title_formats": [], "default_status": true, "preview_targets": [{"label": "Entry", "format": "{permalink}"}], "past_date_behavior": "public", "future_date_behavior": "private"}',
                'title' => 'Projects',
                'updated_at' => '2022-09-29 09:19:01',
            ),
        ));
        
        
    }
}