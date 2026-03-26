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
use App\Services\ArticleService;
use App\Services\InterventionService;
use App\Services\EventService;
use App\Services\SuccessHistoriesService;


class HomePageController extends Controller
{
    public function __construct(
        protected ArticleService $noticia,
        protected InterventionService $area,
        protected EventService $eventos,
        protected SuccessHistoriesService $historias
    ) {}

public function __invoke()
{
    return view('welcome', [
            'articles' => $this->noticia->list(8),
            'events' => $this->eventos->list(6),
            'histories' => $this->historias->list(),
            'interventions' => $this->area->all(),

            'SEOData' => BaseSeoApp::data(),
        ]);
    }
}