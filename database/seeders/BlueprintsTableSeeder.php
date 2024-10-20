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
                'id' => 1,
                'namespace' => NULL,
                'handle' => 'default',
                'data' => '{"fields": [{"field": {"type": "markdown", "display": "Content", "localizable": true}, "handle": "content"}]}',
                'created_at' => '2023-09-14 21:02:34',
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'namespace' => 'collections.events',
                'handle' => 'event',
                'data' => '{"tabs": {"main": {"__count": 0, "display": "Main", "sections": [{"fields": [{"field": {"type": "text", "required": true, "validate": ["required"]}, "handle": "title"}, {"field": {"icon": "assets", "mode": "list", "type": "assets", "display": "Cover", "listable": "hidden", "restrict": false, "validate": ["image"], "container": "assets", "max_files": 1, "visibility": "visible", "hide_display": false, "show_set_alt": true, "allow_uploads": true, "show_filename": true, "instructions_position": "above"}, "handle": "cover"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Location", "listable": "hidden", "input_type": "text", "visibility": "visible", "placeholder": "Location", "hide_display": false, "instructions_position": "above"}, "handle": "location"}, {"field": {"icon": "bard", "type": "bard", "inline": false, "antlers": false, "buttons": ["h2", "h3", "bold", "italic", "unorderedlist", "orderedlist", "removeformat", "quote", "anchor", "image", "table"], "display": "Event Description", "collapse": false, "listable": "hidden", "previews": true, "validate": ["required"], "save_html": true, "fullscreen": true, "visibility": "visible", "word_count": true, "placeholder": "Event description", "allow_source": true, "hide_display": false, "reading_time": true, "target_blank": true, "toolbar_mode": "fixed", "link_noopener": false, "link_noreferrer": false, "smart_typography": false, "enable_input_rules": true, "enable_paste_rules": true, "remove_empty_nodes": false, "instructions_position": "above", "always_show_set_button": false}, "handle": "event_description"}, {"field": {"icon": "date", "mode": "single", "rows": 1, "type": "date", "inline": false, "columns": 1, "display": "Start date", "listable": "hidden", "validate": ["required"], "full_width": false, "visibility": "visible", "hide_display": false, "time_enabled": true, "time_seconds_enabled": false, "instructions_position": "above"}, "handle": "start_date"}, {"field": {"icon": "date", "mode": "single", "rows": 1, "type": "date", "inline": false, "columns": 1, "display": "End date", "listable": "hidden", "validate": ["required", "after:start_date"], "full_width": false, "visibility": "visible", "hide_display": false, "time_enabled": true, "time_seconds_enabled": false, "instructions_position": "above"}, "handle": "end_date"}], "__count": 0}]}, "sidebar": {"__count": 1, "display": "Sidebar", "sections": [{"fields": [{"field": {"type": "slug", "localizable": true}, "handle": "slug"}], "__count": 0}]}}, "title": "Event"}',
                'created_at' => '2023-09-17 07:12:31',
                'updated_at' => '2023-09-17 11:58:20',
            ),
            2 =>
            array (
                'id' => 3,
                'namespace' => 'collections.articles',
                'handle' => 'article',
                'data' => '{"tabs": {"main": {"__count": 0, "display": "Principal", "sections": [{"fields": [{"field": {"type": "text", "required": true, "validate": ["required"]}, "handle": "title"}, {"field": {"icon": "assets", "mode": "list", "type": "assets", "display": "Cover", "listable": "hidden", "restrict": false, "validate": ["required"], "container": "assets", "max_files": 1, "visibility": "visible", "hide_display": false, "show_set_alt": true, "allow_uploads": true, "show_filename": true, "instructions_position": "above"}, "handle": "cover"}, {"field": {"icon": "textarea", "type": "textarea", "antlers": false, "display": "Short description", "listable": "hidden", "visibility": "visible", "placeholder": "Breve descrição da actividade", "hide_display": false, "instructions": "Breve resumo da actividade", "character_limit": "5000", "instructions_position": "above"}, "handle": "short_description"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Location", "listable": "hidden", "validate": ["required"], "input_type": "text", "visibility": "visible", "placeholder": "Local onde realizou-se a actividade", "hide_display": false, "instructions": "Local onde realizou-se a actividade", "instructions_position": "above"}, "handle": "location"}, {"field": {"icon": "assets", "mode": "list", "type": "assets", "display": "Gallery", "listable": "hidden", "restrict": false, "container": "assets", "max_files": 10, "min_files": 1, "visibility": "visible", "hide_display": false, "show_set_alt": true, "allow_uploads": true, "show_filename": true, "instructions_position": "above"}, "handle": "gallery"}, {"field": {"icon": "replicator", "sets": {"new_set_group": {"icon": null, "sets": {"section": {"icon": "media-news-paper", "fields": [{"field": {"icon": "text", "type": "text", "antlers": false, "display": "title", "listable": "hidden", "validate": ["required"], "input_type": "text", "visibility": "visible", "placeholder": "Títolo", "hide_display": false, "instructions": "Títolo", "instructions_position": "above"}, "handle": "title"}, {"field": {"icon": "textarea", "type": "textarea", "antlers": false, "display": "Content", "listable": "hidden", "validate": ["required"], "visibility": "visible", "placeholder": "Conteúdo da secção", "hide_display": false, "instructions": "Conteúdo da secção", "character_limit": "5000", "instructions_position": "above"}, "handle": "content"}, {"field": {"icon": "assets", "mode": "list", "type": "assets", "display": "Image", "listable": "hidden", "restrict": false, "validate": ["required"], "container": "assets", "max_files": 1, "visibility": "visible", "hide_display": false, "instructions": "Foto da secção", "show_set_alt": true, "allow_uploads": true, "show_filename": true, "instructions_position": "above"}, "handle": "image"}], "display": "Section", "instructions": null}}, "display": "New Set Group", "instructions": null}}, "type": "replicator", "display": "Sections", "collapse": false, "listable": "hidden", "max_sets": 10, "previews": true, "fullscreen": true, "visibility": "visible", "hide_display": false, "instructions": "Secções da actividade ou paragrafos relacionados a actividade.", "instructions_position": "above"}, "handle": "sections"}, {"field": {"icon": "date", "mode": "single", "rows": 1, "type": "date", "inline": false, "columns": 1, "display": "Post date", "listable": "hidden", "full_width": false, "visibility": "visible", "hide_display": false, "instructions": "Data da postagem", "time_enabled": false, "time_seconds_enabled": false, "instructions_position": "above"}, "handle": "post_date"}], "__count": 0}]}, "sidebar": {"__count": 1, "display": "Sidebar", "sections": [{"fields": [{"field": {"type": "slug", "localizable": true}, "handle": "slug"}, {"field": {"icon": "taxonomy", "mode": "default", "type": "terms", "create": true, "display": "Category", "listable": true, "max_items": 1, "taxonomies": ["categories"], "visibility": "visible", "hide_display": false, "instructions": "Tipo de actividade a postar, como por exemplo fotos de um evento na qual o AMPDC participou.", "instructions_position": "above"}, "handle": "category"}], "__count": 0}]}}, "title": "Article"}',
                'created_at' => '2023-09-17 12:34:36',
                'updated_at' => '2023-09-17 13:04:10',
            ),
            3 =>
            array (
                'id' => 4,
                'namespace' => 'forms',
                'handle' => 'contact_us',
                'data' => '{"tabs": {"main": {"__count": 0, "display": "Principal", "sections": [{"fields": [{"field": {"icon": "text", "type": "text", "antlers": false, "display": "Nome", "listable": "hidden", "validate": ["required"], "input_type": "text", "visibility": "visible", "placeholder": "Nome", "hide_display": false, "instructions_position": "above"}, "handle": "nome"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Email", "listable": "hidden", "validate": ["nullable", "email"], "input_type": "text", "visibility": "visible", "hide_display": false, "instructions_position": "above"}, "handle": "email"}, {"field": {"icon": "text", "type": "text", "antlers": false, "display": "Contacto", "listable": "hidden", "validate": ["nullable"], "input_type": "text", "visibility": "visible", "hide_display": false, "instructions_position": "above"}, "handle": "contacto"}, {"field": {"icon": "textarea", "type": "textarea", "antlers": false, "display": "Mensagem", "listable": "hidden", "validate": ["required"], "visibility": "visible", "placeholder": "Mensagem", "hide_display": false, "instructions": "Mensagem", "instructions_position": "above"}, "handle": "mensagem"}], "__count": 0}]}}}',
                'created_at' => '2023-09-17 21:52:20',
                'updated_at' => '2023-09-17 21:52:25',
            ),
            4 =>
            array (
                'id' => 5,
                'namespace' => 'collections.success_histories',
                'handle' => 'success_history',
                'data' => '{"tabs": {"main": {"__count": 0, "display": "Principal", "sections": [{"fields": [{"field": {"type": "text", "antlers": false, "display": "Name", "listable": "hidden", "required": true, "validate": ["required"], "input_type": "text", "visibility": "visible", "placeholder": "Nome", "hide_display": false, "instructions_position": "above"}, "handle": "title"}, {"field": {"icon": "assets", "mode": "list", "type": "assets", "display": "Image", "listable": "hidden", "restrict": false, "validate": ["image"], "container": "assets", "max_files": 1, "visibility": "visible", "hide_display": false, "show_set_alt": true, "allow_uploads": true, "show_filename": true, "instructions_position": "above"}, "handle": "image"}, {"field": {"icon": "bard", "type": "bard", "inline": false, "antlers": false, "buttons": ["h2", "h3", "bold", "italic", "unorderedlist", "orderedlist", "removeformat", "quote", "anchor", "image", "table"], "display": "Content", "collapse": false, "listable": "hidden", "previews": true, "validate": ["required"], "save_html": true, "fullscreen": true, "visibility": "visible", "word_count": true, "allow_source": true, "hide_display": false, "reading_time": false, "target_blank": false, "toolbar_mode": "fixed", "link_noopener": false, "link_noreferrer": false, "smart_typography": false, "enable_input_rules": true, "enable_paste_rules": true, "remove_empty_nodes": false, "instructions_position": "above", "always_show_set_button": false}, "handle": "content"}, {"field": {"icon": "date", "mode": "single", "rows": 1, "type": "date", "inline": false, "columns": 1, "display": "History date", "listable": "hidden", "full_width": false, "visibility": "visible", "hide_display": false, "instructions": "Data da publicação da história de vida", "time_enabled": false, "time_seconds_enabled": false, "instructions_position": "above"}, "handle": "history_date"}], "__count": 0}]}, "sidebar": {"__count": 1, "display": "Sidebar", "sections": [{"fields": [{"field": {"type": "slug", "localizable": true}, "handle": "slug"}], "__count": 0}]}}, "title": "Success History"}',
                'created_at' => '2023-09-17 22:05:04',
                'updated_at' => '2023-09-17 22:26:56',
            ),
        ));


    }
}
