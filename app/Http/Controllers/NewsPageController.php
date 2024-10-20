<?php

namespace App\Http\Controllers;

use App\helpers\ArticleEntries;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Vite;

class NewsPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(String $slug)
    {
        $article  = ArticleEntries::article($slug);
        return view('news_page', [
            'article' => $article,
            'SEOData' => new SEOData(
                title: 'Actividade - ' .  $article?->title ?? '',
                description: $article?->short_description ?? '',
                author: 'Nelson Alexandre Mutane',
                image: public_path(). '/storage/' . $article?->cover ?? '',
                published_time: Carbon::createFromDate($article->year, 9, $article->day),
                modified_time: Carbon::createFromDate($article->year, 9, $article->day),
                section: 'Actividade - ' .  $article?->title ?? '',
                schema: SchemaCollection::initialize()->addArticle(),
                type: 'article',
                site_name: 'Actividade - ' .  $article?->title ?? ''
            )
        ]);
    }
}
