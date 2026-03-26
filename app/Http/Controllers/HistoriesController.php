<?php

namespace App\Http\Controllers;

use App\Services\SuccessHistoriesService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Statamic\Eloquent\Entries\Entry;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class HistoriesController extends Controller
{
public function __invoke(String $slug)
{
    $history = $this->histories->findBySlug($slug);
    if (!$history) {
        abort(404);
    }
    return view('history', [
        'history' => $history,
        'histories' => $this->histories->list(),
        'SEOData' => new SEOData(
            title: 'Evento - ' . $history?->title ?? '',
            description: $history?->description ?? '',
            author: 'Nelson Alexandre Mutane',
            image: public_path() . '/storage/' . $history?->cover ?? '',
            published_time: Carbon::createFromDate(2023, 9, 20),
            modified_time: Carbon::createFromDate(2023, 9, 20),
            section: 'Evento - ' . $history?->title ?? '',
            schema: SchemaCollection::initialize()->addArticle(),
            type: 'article',
            site_name: 'Evento - ' . $history?->title ?? ''
        )
    ]);
}
}
