<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlueprintsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blueprints')->delete();
        
        \DB::table('blueprints')->insert(array (
            0 => 
            array (
                'created_at' => '2022-09-20 09:07:14',
                'data' => '{"fields": [{"field": {"type": "markdown", "display": "Content", "localizable": true}, "handle": "content"}, {"field": {"type": "users", "default": "current", "display": "Author", "max_items": 1, "localizable": true}, "handle": "author"}, {"field": {"type": "template", "display": "Template", "localizable": true}, "handle": "template"}]}',
                'handle' => 'default',
                'id' => 1,
                'namespace' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => '2022-09-21 07:44:34',
                'data' => '{"title": "Test", "sections": {"main": {"fields": [{"field": {"type": "text", "required": true, "validate": ["required"]}, "handle": "title"}, {"field": {"type": "markdown", "display": "Content", "localizable": true}, "handle": "content"}, {"field": {"type": "users", "default": "current", "display": "Author", "max_items": 1, "localizable": true}, "handle": "author"}, {"field": {"type": "template", "display": "Template", "localizable": true}, "handle": "template"}, {"field": {"icon": "bard", "type": "bard", "antlers": false, "buttons": ["h2", "h3", "bold", "italic", "unorderedlist", "orderedlist", "removeformat", "quote", "anchor", "image", "table"], "display": "description", "listable": "hidden", "previews": true, "validate": ["required", "string", "after:2022", "alpha", "array"], "save_html": false, "fullscreen": true, "visibility": "visible", "always_save": false, "allow_source": true, "reading_time": false, "target_blank": false, "toolbar_mode": "fixed", "link_noopener": false, "link_noreferrer": false, "enable_input_rules": true, "enable_paste_rules": true, "remove_empty_nodes": false, "instructions_position": "above", "always_show_set_button": false}, "handle": "description"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "namex", "listable": "hidden", "validate": ["required", "bail", "accepted"], "input_type": "text", "visibility": "visible", "always_save": false, "placeholder": "Mussarela", "character_limit": 34, "instructions_position": "above"}, "handle": "namex"}, {"field": {"icon": "checkboxes", "type": "checkboxes", "inline": false, "display": "isGood", "listable": "hidden", "validate": ["required"], "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "isgood"}, {"field": {"icon": "list", "type": "list", "default": ["Moca", "Fisca", "Busca", "Dullas"], "display": "Mas", "listable": "hidden", "validate": ["required"], "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "mas"}, {"field": {"icon": "array", "keys": {"mix": "mongo", "bill": "mas"}, "mode": "keyed", "type": "array", "display": "bloom_array", "listable": "hidden", "validate": ["required"], "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "bloom_array"}], "__count": 0, "display": "Main"}, "sidebar": {"fields": [{"field": {"type": "slug", "localizable": true}, "handle": "slug"}], "__count": 1, "display": "Sidebar"}}}',
                'handle' => 'test',
                'id' => 2,
                'namespace' => 'collections.tests',
                'updated_at' => '2022-09-21 07:46:20',
            ),
            2 => 
            array (
                'created_at' => '2022-09-26 15:23:15',
                'data' => '{"title": "Page", "sections": {"main": {"fields": [{"field": {"type": "text", "required": true, "validate": ["required"]}, "handle": "title"}, {"field": {"type": "users", "default": "current", "display": "Author", "max_items": 1, "localizable": true}, "handle": "author"}, {"field": {"type": "template", "display": "Template", "localizable": true}, "handle": "template"}, {"field": {"icon": "replicator", "sets": {"hero_section": {"fields": [{"field": {"icon": "assets", "type": "responsive", "display": "Image", "listable": "hidden", "restrict": false, "validate": ["required"], "allow_fit": true, "visibility": "visible", "allow_ratio": true, "always_save": false, "breakpoints": ["sm", "md", "lg", "xl", "2xl"], "allow_uploads": true, "use_breakpoints": true, "instructions_position": "above"}, "handle": "image"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Alt", "listable": "hidden", "validate": ["required", "string"], "input_type": "text", "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "alt"}], "display": "Hero Section"}}, "type": "replicator", "display": "Hero", "collapse": false, "listable": "hidden", "previews": true, "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "hero"}, {"field": {"icon": "replicator", "sets": {"about": {"fields": [{"field": {"icon": "text", "type": "text", "antlers": false, "display": "Title", "listable": "hidden", "validate": ["required", "string"], "input_type": "text", "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "title"}, {"field": {"icon": "bard", "type": "bard", "antlers": false, "buttons": ["h2", "h3", "bold", "italic", "unorderedlist", "orderedlist", "removeformat", "quote", "anchor", "image", "table"], "display": "Content", "collapse": false, "listable": "hidden", "previews": true, "validate": ["required"], "save_html": false, "fullscreen": true, "visibility": "visible", "always_save": false, "allow_source": true, "reading_time": false, "target_blank": false, "toolbar_mode": "fixed", "link_noopener": false, "link_noreferrer": false, "enable_input_rules": true, "enable_paste_rules": true, "remove_empty_nodes": false, "instructions_position": "above", "always_show_set_button": false}, "handle": "content"}, {"field": {"icon": "assets", "mode": "list", "type": "assets", "display": "Image", "listable": "hidden", "restrict": false, "validate": ["required"], "container": "hero_media_assets", "max_files": 1, "visibility": "visible", "always_save": false, "allow_uploads": true, "show_filename": true, "instructions_position": "above"}, "handle": "image"}], "display": "About"}}, "type": "replicator", "display": "Sections", "collapse": false, "listable": "hidden", "max_sets": 1, "previews": true, "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "sections"}, {"field": {"icon": "bard", "type": "bard", "antlers": false, "buttons": ["h2", "h3", "bold", "italic", "unorderedlist", "orderedlist", "removeformat", "quote", "anchor", "image", "table"], "display": "Content", "collapse": false, "listable": "hidden", "previews": true, "save_html": false, "fullscreen": true, "visibility": "visible", "always_save": false, "allow_source": true, "reading_time": false, "target_blank": false, "toolbar_mode": "fixed", "link_noopener": false, "link_noreferrer": false, "enable_input_rules": true, "enable_paste_rules": true, "remove_empty_nodes": false, "instructions_position": "above", "always_show_set_button": false}, "handle": "content"}], "__count": 0, "display": "Main"}, "sidebar": {"fields": [{"field": {"type": "slug", "localizable": true}, "handle": "slug"}, {"field": {"type": "date", "required": true, "validate": ["required"]}, "handle": "date"}, {"field": {"type": "entries", "listable": false, "max_items": 1, "collections": ["pages"], "localizable": true}, "handle": "parent"}], "__count": 1, "display": "Sidebar"}}}',
                'handle' => 'page',
                'id' => 3,
                'namespace' => 'collections.pages',
                'updated_at' => '2022-09-30 08:56:18',
            ),
            3 => 
            array (
                'created_at' => '2022-09-26 15:47:32',
                'data' => '{"sections": {"main": {"fields": [{"field": {"icon": "text", "type": "text", "antlers": false, "display": "Primeiro Nome", "listable": "hidden", "validate": ["required", "string"], "input_type": "text", "visibility": "visible", "always_save": false, "placeholder": "Primeiro Nome", "instructions_position": "above"}, "handle": "primeiro_nome"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Último Nome", "listable": "hidden", "validate": ["required", "string"], "input_type": "text", "visibility": "visible", "always_save": false, "placeholder": "Último Nome", "instructions_position": "above"}, "handle": "ultimo_nome"}, {"field": {"icon": "textarea", "type": "textarea", "antlers": false, "display": "Mensagem", "listable": "hidden", "validate": ["required", "string"], "visibility": "visible", "always_save": false, "placeholder": "Digite a sua mensagem", "character_limit": "8000", "instructions_position": "above"}, "handle": "mensagem"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Email", "listable": "hidden", "validate": ["required", "email"], "input_type": "email", "visibility": "visible", "always_save": false, "placeholder": "Digite seu email", "instructions_position": "above"}, "handle": "email"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Contacto", "listable": "hidden", "validate": ["required", "string"], "input_type": "text", "visibility": "visible", "always_save": false, "placeholder": "Digite seu contacto", "instructions_position": "above"}, "handle": "contacto"}], "__count": 0, "display": "Main"}}}',
                'handle' => 'contactos',
                'id' => 4,
                'namespace' => 'forms',
                'updated_at' => '2022-09-26 15:47:32',
            ),
            4 => 
            array (
                'created_at' => '2022-09-27 08:03:07',
                'data' => '{"sections": {"main": {"fields": [{"field": {"icon": "text", "type": "text", "antlers": false, "default": "Sumburero", "display": "Page Footer heading", "listable": "hidden", "validate": ["required", "string"], "input_type": "text", "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "page_footer_heading"}, {"field": {"icon": "textarea", "type": "textarea", "antlers": false, "display": "Page Footer description", "listable": "hidden", "validate": ["required", "string"], "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "page_footer_description"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Page Footer Email", "listable": "hidden", "validate": ["required", "string", "email"], "input_type": "text", "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "page_footer_email"}, {"field": {"icon": "text", "type": "text", "antlers": false, "default": "Rua Condestável 1,783 Cidade da Beira, Sofala Moçambique", "display": "Page Footer localizacao", "listable": "hidden", "validate": ["required", "string"], "input_type": "text", "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "page_footer_localizacao"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Telefone 1", "listable": "hidden", "validate": ["required", "string"], "input_type": "text", "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "telefone_1"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Telefone 2", "listable": "hidden", "validate": ["string"], "input_type": "text", "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "telefone_2"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Telefone 3", "listable": "hidden", "validate": ["string"], "input_type": "text", "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "telefone_3"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "copyright", "listable": "hidden", "validate": ["required", "string"], "input_type": "text", "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "copyright"}], "__count": 0, "display": "Main"}}}',
                'handle' => 'page_footer',
                'id' => 5,
                'namespace' => 'globals',
                'updated_at' => '2022-09-27 09:29:15',
            ),
            5 => 
            array (
                'created_at' => '2022-09-29 08:36:48',
                'data' => '{"title": "Life History", "sections": {"main": {"fields": [{"field": {"type": "text", "required": true, "validate": ["required"]}, "handle": "title"}, {"field": {"type": "markdown", "display": "Content", "localizable": true}, "handle": "content"}, {"field": {"type": "users", "default": "current", "display": "Author", "max_items": 1, "localizable": true}, "handle": "author"}, {"field": {"type": "template", "display": "Template", "localizable": true}, "handle": "template"}, {"field": {"icon": "assets", "type": "responsive", "display": "Image", "listable": "hidden", "restrict": false, "validate": ["required"], "allow_fit": true, "container": "hero_media_assets", "visibility": "visible", "allow_ratio": true, "always_save": false, "breakpoints": ["sm", "md", "lg", "xl", "2xl"], "allow_uploads": true, "use_breakpoints": true, "instructions_position": "above"}, "handle": "image"}, {"field": {"icon": "date", "mode": "single", "rows": 1, "type": "date", "inline": false, "columns": 1, "display": "Created at", "listable": "hidden", "validate": ["required", "date"], "full_width": false, "visibility": "visible", "always_save": false, "time_enabled": false, "time_seconds_enabled": false, "instructions_position": "above"}, "handle": "created_at"}], "__count": 0, "display": "Main"}, "sidebar": {"fields": [{"field": {"type": "slug", "localizable": true}, "handle": "slug"}, {"field": {"type": "date", "required": true, "validate": ["required"]}, "handle": "date"}, {"field": {"type": "entries", "listable": false, "max_items": 1, "collections": ["life_histories"], "localizable": true}, "handle": "parent"}], "__count": 1, "display": "Sidebar"}}}',
                'handle' => 'life_history',
                'id' => 6,
                'namespace' => 'collections.life_histories',
                'updated_at' => '2022-09-29 08:41:43',
            ),
            6 => 
            array (
                'created_at' => '2022-09-29 09:09:47',
                'data' => '{"title": "Actividade", "sections": {"main": {"fields": [{"field": {"type": "text", "required": true, "validate": ["required"]}, "handle": "title"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "subtitle", "listable": "hidden", "input_type": "text", "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "subtitle"}, {"field": {"icon": "textarea", "type": "textarea", "antlers": false, "display": "Short Content", "listable": "hidden", "visibility": "visible", "always_save": false, "instructions_position": "above"}, "handle": "short_content"}, {"field": {"icon": "bard", "type": "bard", "antlers": false, "buttons": ["h2", "h3", "bold", "italic", "unorderedlist", "orderedlist", "removeformat", "quote", "anchor", "image", "table"], "display": "Content", "collapse": false, "listable": "hidden", "previews": true, "save_html": false, "fullscreen": true, "visibility": "visible", "always_save": false, "allow_source": true, "reading_time": false, "target_blank": false, "toolbar_mode": "fixed", "link_noopener": false, "link_noreferrer": false, "enable_input_rules": true, "enable_paste_rules": true, "remove_empty_nodes": false, "instructions_position": "above", "always_show_set_button": false}, "handle": "content"}, {"field": {"icon": "assets", "type": "responsive", "display": "cover", "listable": "hidden", "restrict": false, "allow_fit": true, "visibility": "visible", "allow_ratio": true, "always_save": false, "breakpoints": ["sm", "md", "lg", "xl", "2xl"], "allow_uploads": true, "use_breakpoints": true, "instructions_position": "above"}, "handle": "cover"}, {"field": {"type": "users", "default": "current", "display": "Author", "max_items": 1, "localizable": true}, "handle": "author"}, {"field": {"type": "template", "display": "Template", "localizable": true}, "handle": "template"}, {"field": {"icon": "date", "mode": "single", "rows": 1, "type": "date", "inline": false, "columns": 1, "display": "date", "listable": "hidden", "required": true, "validate": ["required", "date"], "full_width": false, "visibility": "visible", "always_save": false, "time_enabled": false, "time_seconds_enabled": false, "instructions_position": "above"}, "handle": "date"}], "__count": 0, "display": "Main"}, "sidebar": {"fields": [{"field": {"type": "slug", "localizable": true}, "handle": "slug"}, {"field": {"mode": "select", "type": "terms", "display": "Akulo Akulo", "taxonomies": ["akulo_akulo"]}, "handle": "akulo_akulo"}], "__count": 1, "display": "Sidebar"}}}',
                'handle' => 'actividade',
                'id' => 7,
                'namespace' => 'collections.actividades',
                'updated_at' => '2022-09-30 08:59:20',
            ),
        ));
        
        
    }
}