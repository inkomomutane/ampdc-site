<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use Illuminate\Support\Carbon;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Vite;

class NewsPageController extends Controller
{
     public function __construct(
        protected ArticleService $articles
    ) {}
    public function __invoke(string $slug)
    {
        $article = $this->articles->findBySlug($slug);

        // 🔴 Segurança: evita erro se não encontrar
        if (!$article) {
            abort(404);
        }

        // 🔹 Data correta (usa start_date se existir)
        $publishedDate = isset($article->date)
            ? Carbon::parse($article->date)
            : Carbon::createFromDate($article->year, now()->month, $article->day);

        return view('news_page', compact('article') + [
            'SEOData' => new SEOData(
                title: 'Actividade - ' . ($article->title ?? ''),
                description: $article->short_description ?? '',
                author: 'Nelson Alexandre Mutane',

                // 🔹 imagem STRAPI (URL direta)
                image: $article->cover_image ?? '',

                published_time: $publishedDate,
                modified_time: $publishedDate,

                section: 'Actividade - ' . ($article->title ?? ''),
                schema: SchemaCollection::initialize()->addArticle(),
                type: 'article',
                site_name: 'Actividade - ' . ($article->title ?? '')
            )
        ]);
    }
}