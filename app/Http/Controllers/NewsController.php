<?php

namespace App\Http\Controllers;

use App\helpers\ArticleEntries;
use Illuminate\Http\Request;

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

            'article' =>  $article ?? null
        ]);
    }
}
