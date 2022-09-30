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
        
        
        
    }
}