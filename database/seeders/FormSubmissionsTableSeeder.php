<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FormSubmissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('form_submissions')->delete();
        
        \DB::table('form_submissions')->insert(array (
            0 => 
            array (
                'created_at' => '2022-09-26 16:32:42.332284',
                'data' => '{"email": "nelson.mutane@uzambeze.ac.mz", "contacto": "847607095", "mensagem": "Ok", "ultimo_nome": "Mutane", "primeiro_nome": "Nelson Alexandre"}',
                'form_id' => 1,
                'id' => 1,
                'updated_at' => '2022-09-26 16:32:42.332284',
            ),
            1 => 
            array (
                'created_at' => '2022-09-27 06:33:44.468126',
                'data' => '{"email": "nelsonmutane@f.com", "contacto": "s", "mensagem": "s", "ultimo_nome": "Mutane", "primeiro_nome": "Nelson Alexandre"}',
                'form_id' => 1,
                'id' => 2,
                'updated_at' => '2022-09-27 05:44:30.479438',
            ),
            2 => 
            array (
                'created_at' => '2022-09-27 06:33:44.468128',
                'data' => '{"date": "2022-09-27T06:33:44.468128Z", "email": "administrator@mimovel.com", "contacto": "3333333", "mensagem": "Message", "ultimo_nome": "Mutane", "primeiro_nome": "Nelson Alexandre"}',
                'form_id' => 1,
                'id' => 3,
                'updated_at' => '2022-09-27 06:33:44.472047',
            ),
            3 => 
            array (
                'created_at' => '2022-09-27 12:16:51.850465',
                'data' => '{"date": "2022-09-27T12:16:51.850465Z", "email": "armando@gmail.com", "contacto": "86785955", "mensagem": "wrtf", "ultimo_nome": "Paulo", "primeiro_nome": "Armando"}',
                'form_id' => 1,
                'id' => 4,
                'updated_at' => '2022-09-27 12:16:51.856825',
            ),
            4 => 
            array (
                'created_at' => '2022-09-29 08:28:53.741599',
                'data' => '{"date": "2022-09-29T08:28:53.741599Z", "email": "nelson.mutane@uzambeze.ac.mz", "contacto": "847607095", "mensagem": "f", "ultimo_nome": "Mutane", "primeiro_nome": "Nelson Alexandre"}',
                'form_id' => 1,
                'id' => 5,
                'updated_at' => '2022-09-29 08:28:53.744796',
            ),
            5 => 
            array (
                'created_at' => '2022-09-29 08:30:24.005433',
                'data' => '{"date": "2022-09-29T08:30:24.005433Z", "email": "ibra@test.com", "contacto": "86785955", "mensagem": "qw", "ultimo_nome": "Mutane", "primeiro_nome": "Nelson Alexandre"}',
                'form_id' => 1,
                'id' => 6,
                'updated_at' => '2022-09-29 08:30:24.007043',
            ),
        ));
        
        
    }
}