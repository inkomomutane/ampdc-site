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
                site_name: 'Actividade - ' .  $article?->title ?? '',
                section: 'Actividade - ' .  $article?->title ?? '',
                type: 'article',
                schema: SchemaCollection::initialize()->addArticle(),
                published_time: Carbon::createFromDate(2023, 9, 20),
                modified_time: Carbon::createFromDate(2023, 9, 20),
                image: public_path(). '/storage/' . $article?->cover ?? ''
            )
        ]);
    }
}
