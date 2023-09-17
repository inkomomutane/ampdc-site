<?php

namespace App\Http\Controllers;

use App\helpers\ArticleEntries;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('news', [
            'articles' =>
            ArticleEntries::articles()
                ->sortByDesc('post_date'),
            'article' => ArticleEntries::articles()
                ->sortByDesc('post_date')?->first() ?? null
        ]);
    }
}
