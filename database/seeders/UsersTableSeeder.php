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
                'id' => 1,
                'name' => 'Administrator',
                'email' => 'administrator@sumburero.org',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xbm/6uMzXCohT2SyISKGqujLQghGWzL8EAf8mtpClHoblu1R1m07y',
                'remember_token' => 'xpDrhBWXJme19k7QuKcoSwTF2s242lIU9Zx9pAMnu7A6gwxVfv6cszSPBraH',
                'created_at' => '2023-09-14 21:09:56',
                'updated_at' => '2023-09-17 22:14:10',
                'super' => 1,
                'avatar' => NULL,
                'preferences' => '{"forms": {"contact_us": {"columns": ["nome", "email", "contacto", "datestamp"]}}, "collections": {"events": {"columns": ["cover", "title", "location", "event_description", "slug", "status"]}, "articles": {"columns": ["title", "slug", "category", "status", "post_date"]}, "success_histories": {"columns": ["image", "title", "history_date", "status"]}}}',
                'last_login' => '2023-09-17 19:56:28',
            ),
        ));
        
        
    }
}