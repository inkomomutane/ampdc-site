<?php

namespace App\Http\Controllers;

use App\helpers\ArticleEntries;
use Illuminate\Http\Request;

class NewsPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(String $slug)
    {
        return view('news_page', [
            'article' => ArticleEntries::article($slug)
        ]);
    }
}
