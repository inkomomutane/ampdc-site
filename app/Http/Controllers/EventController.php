<?php

namespace App\Http\Controllers;

use App\helpers\EventEntries;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Statamic\Eloquent\Entries\Entry;

class EventController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(String $slug)
    {
        return view('event', [
            'event' => EventEntries::event($slug),
            'events' => EventEntries::events()->where('slug','<>',$slug)
        ]);
    }
}
