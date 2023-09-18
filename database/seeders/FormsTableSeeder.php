<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FormsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('forms')->delete();
        
        \DB::table('forms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'handle' => 'contact_us',
                'title' => 'Contact us',
                'settings' => '{"email": [], "store": true, "honeypot": "honeypot"}',
                'created_at' => '2023-09-17 21:49:42',
                'updated_at' => '2023-09-17 21:49:54',
            ),
        ));
        
        
    }
}