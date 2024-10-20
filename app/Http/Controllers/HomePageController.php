<?php

namespace App\Http\Controllers;

use App\helpers\ArticleEntries;
use App\helpers\BaseSeoApp;
use App\helpers\EventEntries;
use App\helpers\Intervention;
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
                'articles' => ArticleEntries::articles()->take(8)
                    ->sortByDesc('post_date')
                    ->take(10),
                'histories' => SuccessHistoriesEntries::successHistories(),
                'SEOData' => BaseSeoApp::data(),
                'interventions' => Intervention::all()
            ]
        );
    }
}
