<?php

namespace App\Http\Controllers;

use App\helpers\ArticleEntries;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Vite;

class NewsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $articles  = ArticleEntries::articles()
            ->sortByDesc('post_date');
        $article = $articles->first();
        return view('news', [
            'articles' => $articles->reject(function ($entry) use ($article) {
                return  $entry->id == $article?->id;
            })->paginate(5),

            'article' =>  $article ?? null,
            'SEOData' => new SEOData(
                title: 'AMPDC - Actividades realizadas',
                description: 'Todas actividades realizadas pelo AMPDC desde a sua existência assim como os eventos nos
               quais teve o prazer de participar.',
                author: 'Nelson Alexandre Mutane',
                image: Vite::asset('resources/images/logo.webp'),
                published_time: Carbon::createFromDate(2023, 9, 20),
                modified_time: Carbon::createFromDate(2023, 9, 20),
                section: 'AMPDC - Actividades realizadas',
                schema: SchemaCollection::initialize()->addArticle(),
                type: 'website',
                site_name: 'AMPDC - Actividades realizadas'
            )
        ]);
    }
}
