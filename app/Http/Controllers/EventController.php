<?php

namespace App\Http\Controllers;

use App\helpers\EventEntries;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Statamic\Eloquent\Entries\Entry;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class EventController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(String $slug)
    {
        $event = EventEntries::event($slug);
        return view('event', [
            'event' => $event,
            'events' => EventEntries::events()->where('slug','<>',$slug),
            'SEOData' => new SEOData(
                title: 'Evento - ' .  $event?->title ?? '',
                description: $event?->event_description ?? '',
                author: 'Nelson Alexandre Mutane',
                image: public_path(). '/storage/' . $event?->cover ?? '',
                published_time: Carbon::createFromDate(2023, 9, 20),
                modified_time: Carbon::createFromDate(2023, 9, 20),
                section: 'Evento - ' .  $event?->title ?? '',
                schema: SchemaCollection::initialize()->addArticle(),
                type: 'article',
                site_name: 'Evento - ' .  $event?->title ?? ''
            )
        ]);
    }
}
