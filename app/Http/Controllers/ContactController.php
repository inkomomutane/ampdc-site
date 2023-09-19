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
                description: 'Entrar em contacto com a equipa de sumburero',
                author: 'Nelson Alexandre Mutane',
                site_name: 'Contacte-nos',
                section: 'Contacte-nos',
                type: 'website',
                schema: SchemaCollection::initialize()->addArticle(),

                published_time: Carbon::createFromDate(2023, 9, 20),
                modified_time: Carbon::createFromDate(2023, 9, 20),
                image:  Vite::asset('resources/images/logo.webp')
            )
        ]);
    }
}
