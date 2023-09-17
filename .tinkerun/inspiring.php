<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Carbon;
use Statamic\Eloquent\Entries\Entry;
use Statamic\Entries\Entry as EntriesEntry;
use Statamic\Facades\Entry as FacadesEntry;

Inspiring::quote();

// Benchmark::dd(
//     fn () =>  Entry::query()->whereCollection('events')->get()->map(function ($entry) {
//         $finalEntry = $entry->fileData();
//         $date = Carbon::parse($finalEntry['event_date']);
//         $finalEntry['day'] = $date->day;
//         $finalEntry['month'] = $date->shortMonthName;
//         $finalEntry['year'] = $date->year;
//         $finalEntry['slug'] = $entry->slug;
//         $finalEntry['published'] = $entry->published;
//         return (object) $finalEntry;
//     })->where('published', true)->where('day', '>=', now()->day)
// );

// $data =  Entry::query()->whereCollection('events')->get()->map(function ($entry) {
//     $finalEntry = $entry->fileData();
//     $date = Carbon::parse($finalEntry['event_date']);
//     $finalEntry['day'] = $date->day;
//     $finalEntry['month'] = $date->shortMonthName;
//     $finalEntry['year'] = $date->year;
//     $finalEntry['slug'] = $entry->slug;
//     $finalEntry['published'] = $entry->published;
//     return (object) $finalEntry;
// })->where('published', true)->where('day', '>=', now()->day);
Entry::query()->whereCollection('articles')->get()->map(function (EntriesEntry $entry) {
    return $entry->fileData();
});
