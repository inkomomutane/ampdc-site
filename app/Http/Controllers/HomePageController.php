<?php

namespace App\Http\Controllers;

use App\helpers\ArticleEntries;
use App\helpers\EventEntries;
use App\helpers\SuccessHistoriesEntries;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Statamic\Eloquent\Entries\Entry;
use Statamic\Statamic;

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
                'histories' => SuccessHistoriesEntries::successHistories()
            ]
        );
    }
}
