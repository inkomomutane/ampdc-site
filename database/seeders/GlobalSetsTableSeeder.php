<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GlobalSetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('global_sets')->delete();
        
        \DB::table('global_sets')->insert(array (
            0 => 
            array (
                'created_at' => '2022-09-27 07:56:54',
                'handle' => 'page_footer',
                'id' => 1,
            'localizations' => '{"default": {"data": {"copyright": "Copyright Sumburero 2022. Todos direitos reservados.", "telefone_1": "+258 (84) 595 0861", "telefone_2": "+258 (84) 582 0730", "telefone_3": null, "page_footer_email": "Geral@sumburero.org", "page_footer_heading": "Sumburero", "page_footer_description": "Grupo Técnico de Protecção Social", "page_footer_localizacao": "Rua Condestável 1,783 Cidade da Beira, Sofala Moçambique"}, "locale": "default", "origin": null}}',
                'title' => 'Page Footer',
                'updated_at' => '2022-09-27 09:29:28',
            ),
        ));
        
        
    }
}