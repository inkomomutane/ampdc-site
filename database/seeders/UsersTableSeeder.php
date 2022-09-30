<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'avatar' => NULL,
                'created_at' => '2022-09-20 09:07:49',
                'email' => 'nelsonmutane@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'last_login' => NULL,
                'name' => 'Nelson Alexandre mutane',
                'password' => '$2y$10$pPx73C/h1TwxCyDSpBWNXuz6fXfQ3HzHkl3OGF76abV/gnHBY0KBu',
                'preferences' => '{"assets": {"hero_media_assets": {"mode": "grid"}}, "collections": {"actividades": {"columns": ["title", "author", "slug", "akulo_akulo", "date", "cover", "subtitle", "short_content"], "after_save": "continue_editing"}}}',
                'remember_token' => NULL,
                'super' => 1,
                'updated_at' => '2022-09-30 08:54:32',
            ),
        ));
        
        
    }
}