<?php
namespace App\helpers;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Vite;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class BaseSeoApp {

    public static  function data (): SEOData
    {
        return new SEOData(
            title: 'AMPDC - Associação de Mulheres para o Desenvolvimento Comunitário',
            description: 'Somos umaorganização humanitária sem fins lucrativos que tem como missão de prestar
                                serviços as comunidades carenciadas tendo em atenção as necessidades imediatas
                                com particular destaque a mulheres e crianças órfãs.',
            author: 'Nelson Alexandre Mutane',
            image: Vite::asset('resources/images/logo.webp'),
            published_time: Carbon::createFromDate(2024, 10, 20),
            modified_time: Carbon::createFromDate(2024, 10, 20),
            section: 'AMPDC - Associação de Mulheres para o Desenvolvimento Comunitário',
            schema: SchemaCollection::initialize()->addArticle(),
            type: 'website',
            site_name: 'AMPDC - Associação de Mulheres para o Desenvolvimento Comunitário'

        );
    }

}
