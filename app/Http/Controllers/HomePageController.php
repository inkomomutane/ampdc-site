<?php

namespace App\Http\Controllers;

use App\helpers\ArticleEntries;
use App\helpers\EventEntries;
use App\helpers\SuccessHistoriesEntries;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Statamic\Eloquent\Entries\Entry;
use Statamic\Statamic;
use Vite;

class HomePageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view(
            'welcome',
            [
                'events' => EventEntries::events(),
                'articles' => ArticleEntries::articles()
                    ->sortByDesc('post_date')
                    ->take(10),
                'histories' => SuccessHistoriesEntries::successHistories(),
                'SEOData' => new SEOData(
                    title: 'Sumburero - Grupo técnico de protecção social',
                    description: 'Somos uma organização sem fins lucrativos sediada em sofla com mais de ' . now()->diffInYears(Carbon::createFromDate(year: 2018)) . ' anos de existência,
                     comprometida em promover a protecção social da criança na província de Sofala,
                     Moçambique. Nossas actividades são baseadas na vasta experiência e aprendizado
                     adquiridos por meio de parcerias com renomadas Organizações da Sociedade Civil e Públicas,
                      como ESSOR, CCM, OASIS, PNDH, e a Universidade Zambeze.',
                    author: 'Nelson Alexandre Mutane',
                    site_name: 'Sumburero - Grupo técnico de protecção social',
                    section: 'Sumburero - Grupo técnico de protecção social',
                    type: 'website',
                    schema: SchemaCollection::initialize()->addArticle(),
                    published_time: Carbon::createFromDate(2023, 9, 20),
                    modified_time: Carbon::createFromDate(2023, 9, 20),
                    image: Vite::asset('resources/images/logo.webp')

                ),
            ]
        );
    }
}
