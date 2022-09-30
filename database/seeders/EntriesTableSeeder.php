<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EntriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('entries')->delete();
        
        \DB::table('entries')->insert(array (
            0 => 
            array (
                'collection' => 'pages',
                'created_at' => '2022-09-20 09:11:28',
                'data' => '{"hero": [{"alt": "Proteção Social", "type": "hero_section", "image": {"src": ["hero_media_assets::sumburero.png"], "glide:fit": "crop_focal"}, "enabled": true}], "title": "Início", "author": 1, "parent": null, "content": "inicio", "sections": [{"type": "about", "image": "home.jpg", "title": "Quem somos?", "content": [{"type": "paragraph", "content": [{"text": "Somos uma organização sem fins lucrativos que tem suas actividades baseadas na experiência e aprendizado de varias Organizações da Sociedade Civil como ESSOR, CCM, OASIS, PNDH, Universidade Zambeze desde vários anos actuando na província de Sofala, Moçambique; assim como através da avaliação do contexto da Protecção Social da Criança realizada através de uma pesquisa em 8 Distritos em 2017 e tendo em conta as prioridades de acção do Governo no que respeita a Protecção Social.", "type": "text"}]}], "enabled": true}], "template": "pages/index", "hero_media": [], "hero_title": "Website", "updated_by": 1, "page_hero_one": {"src": ["hero_media_assets::home.jpg"], "ratio": "16/5", "glide:fit": "crop_focal"}, "page_hero_two": [], "page_hero_five": [], "page_hero_four": [], "page_hero_three": []}',
                'date' => '2022-09-20 00:00:00',
                'id' => 1,
                'origin_id' => NULL,
                'published' => 1,
                'site' => 'default',
                'slug' => 'inicio',
                'status' => 'published',
                'updated_at' => '2022-09-30 08:24:43',
                'uri' => '/',
            ),
            1 => 
            array (
                'collection' => 'pages',
                'created_at' => '2022-09-20 09:20:31',
                'data' => '{"title": "Actividades", "author": 1, "parent": null, "content": "Actividades", "template": "pages/posts/index", "updated_by": 1}',
                'date' => '2022-09-20 00:00:00',
                'id' => 2,
                'origin_id' => NULL,
                'published' => 1,
                'site' => 'default',
                'slug' => 'actividades',
                'status' => 'published',
                'updated_at' => '2022-09-20 09:20:31',
                'uri' => '/actividades',
            ),
            2 => 
            array (
                'collection' => 'pages',
                'created_at' => '2022-09-20 09:21:21',
                'data' => '{"title": "Sobre - nós", "author": 1, "parent": null, "content": "About", "template": "pages/sobre/index", "updated_by": 1}',
                'date' => '2022-09-20 00:00:00',
                'id' => 3,
                'origin_id' => NULL,
                'published' => 1,
                'site' => 'default',
                'slug' => 'sobre-nos',
                'status' => 'published',
                'updated_at' => '2022-09-20 15:36:33',
                'uri' => '/sobre-nos',
            ),
            3 => 
            array (
                'collection' => 'pages',
                'created_at' => '2022-09-20 09:21:49',
                'data' => '{"title": "Contactos", "author": 1, "parent": null, "content": "contact", "template": "pages/contacto/index", "updated_by": 1}',
                'date' => '2022-09-20 00:00:00',
                'id' => 4,
                'origin_id' => NULL,
                'published' => 1,
                'site' => 'default',
                'slug' => 'contactos',
                'status' => 'published',
                'updated_at' => '2022-09-20 15:38:37',
                'uri' => '/contactos',
            ),
            4 => 
            array (
                'collection' => 'life_histories',
                'created_at' => '2022-09-29 08:42:39',
                'data' => '{"image": {"src": ["hero_media_assets::logo.png"]}, "title": "Amélia", "author": 1, "parent": null, "content": "“A Senhora Amélia conseguiu obter o seu registo de nascimento-adultos e conseguiu aproximar ao INSS para começar a obter a sua pensão pelo falecimento do seu esposo.”", "template": "layout", "updated_by": 1}',
                'date' => '2022-09-29 00:00:00',
                'id' => 5,
                'origin_id' => NULL,
                'published' => 1,
                'site' => 'default',
                'slug' => 'amelia',
                'status' => 'published',
                'updated_at' => '2022-09-29 08:45:52',
                'uri' => '/stories/amelia',
            ),
            5 => 
            array (
                'collection' => 'life_histories',
                'created_at' => '2022-09-29 08:46:37',
                'data' => '{"image": {"src": ["hero_media_assets::formacao_violencia.png"]}, "title": "Lukas", "author": 1, "parent": null, "content": "\\"Promoção de actividades culturais, desportivas, jurídicas e acções concrectas nas comunidades que contribuam para o bem estar das familias vulneráveis.\\"", "template": "layout", "updated_by": 1}',
                'date' => '2022-09-29 00:00:00',
                'id' => 6,
                'origin_id' => NULL,
                'published' => 1,
                'site' => 'default',
                'slug' => 'lukas',
                'status' => 'published',
                'updated_at' => '2022-09-29 08:52:58',
                'uri' => '/stories/lukas',
            ),
            6 => 
            array (
                'collection' => 'actividades',
                'created_at' => '2022-09-29 09:10:32',
                'data' => '{"cover": {"src": ["hero_media_assets::home.jpg"]}, "title": "Wassa", "author": 1, "content": "Luppas", "subtitle": "Mambo", "template": "pages/posts/show", "updated_by": 1, "short_content": "Emissão de Bilhetes de identidade no Young África."}',
                'date' => '2022-09-15 00:00:00',
                'id' => 7,
                'origin_id' => NULL,
                'published' => 1,
                'site' => 'default',
                'slug' => 'wassa',
                'status' => 'published',
                'updated_at' => '2022-09-29 09:38:31',
                'uri' => '/actividades/wassa',
            ),
            7 => 
            array (
                'collection' => 'actividades',
                'created_at' => '2022-09-29 10:35:07',
                'data' => '{"cover": {"src": ["hero_media_assets::formacao_violencia.png"]}, "title": "Thump", "author": 1, "content": [{"type": "paragraph", "content": [{"text": "**Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis sit**.", "type": "text", "marks": [{"type": "bold"}]}]}, {"type": "blockquote", "content": [{"type": "paragraph", "content": [{"text": "\\neuismod libero facilisi aptent elementum felis blandit cursus gravida sociis erat ante, eleifend lectus nullam dapibus netus feugiat curae curabitur est ad. Massa curae fringilla porttitor quam sollicitudin iaculis aptent leo ligula euismod dictumst, orci penatibus mauris eros etiam praesent erat volutpat posuere hac. Metus fringilla nec ullamcorper odio aliquam lacinia conubia mauris tempor, etiam ultricies proin quisque lectus sociis id tristique, intege", "type": "text"}, {"text": "r phasellus taciti", "type": "text", "marks": [{"type": "link", "attrs": {"rel": null, "href": "statamic://entry::7", "title": "Tusk", "target": "_blank"}}]}, {"text": " pretium adipiscing tortor sagittis ligula.", "type": "text"}]}]}], "subtitle": "Vivamus", "template": "pages/posts/show", "updated_by": 1, "akulo_akulo": [], "short_content": "Vivamus integer non suscipit taciti mus etiam at primis tempor sagittis sit"}',
                'date' => '2022-09-29 00:00:00',
                'id' => 8,
                'origin_id' => NULL,
                'published' => 1,
                'site' => 'default',
                'slug' => 'thump',
                'status' => 'published',
                'updated_at' => '2022-09-30 09:04:38',
                'uri' => '/actividades/thump',
            ),
        ));
        
        
    }
}