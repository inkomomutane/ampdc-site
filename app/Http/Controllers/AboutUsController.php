<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Statamic\Eloquent\Globals\VariablesModel;
use Vite;

class AboutUsController
{
    public function __invoke()
    {
        $global = VariablesModel::query()->where('handle', 'about_us')->first();
        $about_us = (object) ($global?->data ?? []);
       return view('about-us', [
           'SEOData' => new SEOData(
               title: 'Sobre nós',
               description: 'Somos uma organização sem fins lucrativos com 4 anos de existência,
                 comprometida em promover a protecção social da criança na província de Sofala,
                 Moçambique. Nossas actividades são baseadas na vasta experiência e aprendizado
                 adquiridos por meio de parcerias com renomadas Organizações da Sociedade Civil e Públicas,
                  como ESSOR, CCM, OASIS, PNDH, e a Universidade Zambeze.',
               author: 'Nelson Alexandre Mutane',
               image: Vite::asset('resources/images/logo.webp'),
               published_time: Carbon::createFromDate(2023, 9, 20),
               modified_time: Carbon::createFromDate(2023, 9, 20),
               section: 'Grupo técnico de protecção social.',
               schema: SchemaCollection::initialize()->addArticle(),
               type: 'article',
               site_name: 'Sobre nós',
           ),
           'about' => $about_us
           ]
       );
    }
}
