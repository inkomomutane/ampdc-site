<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaxonomyTermsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('taxonomy_terms')->delete();
        
        \DB::table('taxonomy_terms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'site' => 'default',
                'slug' => 'evento',
                'uri' => '/categories/evento',
                'taxonomy' => 'categories',
                'data' => '{"title": "Evento", "content": "Actividade relacionada a um evento realizado ou que sumburero participou.", "blueprint": "category", "updated_at": 1694954639, "updated_by": 1}',
                'created_at' => '2023-09-17 12:43:59',
                'updated_at' => '2023-09-17 12:43:59',
            ),
            1 => 
            array (
                'id' => 2,
                'site' => 'default',
                'slug' => 'actividade',
                'uri' => '/categories/actividade',
                'taxonomy' => 'categories',
                'data' => '{"title": "Actividade", "content": "Actividade", "blueprint": "category", "updated_at": 1694954655, "updated_by": 1}',
                'created_at' => '2023-09-17 12:44:15',
                'updated_at' => '2023-09-17 12:44:15',
            ),
        ));
        
        
    }
}