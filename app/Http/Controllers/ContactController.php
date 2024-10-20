<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Vite;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('contact', [
            'SEOData' => new SEOData(
                title: 'Contacte-nos',
                description: 'Entrar em contacto com a equipa da AMPDC - Associação de Mulheres para o Desenvolvimento Comunitário',
                author: 'Nelson Alexandre Mutane',
                image: Vite::asset('resources/images/logo.webp'),
                published_time: Carbon::createFromDate(2023, 9, 20),
                modified_time: Carbon::createFromDate(2023, 9, 20),
                section: 'Contacte-nos',

                schema: SchemaCollection::initialize()->addArticle(),
                type: 'website',
                site_name: 'Contacte-nos'
            )
        ]);
    }
}
