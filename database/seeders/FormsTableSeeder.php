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
                'created_at' => '2022-09-26 15:41:47',
                'handle' => 'contactos',
                'id' => 1,
                'settings' => '{"email": [], "store": true, "honeypot": "honeypot"}',
                'title' => 'Contactos',
                'updated_at' => '2022-09-27 06:17:31',
            ),
        ));
        
        
    }
}