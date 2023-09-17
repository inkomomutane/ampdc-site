<?php

namespace App\helpers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Statamic\Eloquent\Entries\Entry;
use Statamic\Entries\Entry as EntriesEntry;

class ArticleEntries
{
    public static function article(String $slug)
    {
        $event =   Entry::query()->whereCollection('articles')->get()->map(function (EntriesEntry $entry) {
            $finalEntry = $entry->fileData();
            $startDate = Carbon::parse($finalEntry['post_date']);
            $finalEntry['day'] = $startDate->day;
            $finalEntry['month'] = $startDate->shortMonthName;
            $finalEntry['year'] = $startDate->year;
            $finalEntry['slug'] = $entry->slug;
            $finalEntry['published'] = $entry->published;
            return (object) $finalEntry;
        })->where('published', true)
            ->where('slug', $slug)?->first();
        abort_if(is_null($event), 404);
        return $event;
    }

    public static function articles(): Collection
    {
        return  Entry::query()->whereCollection('articles')->get()->map(function (EntriesEntry $entry) {
            $finalEntry = $entry->fileData();
            $startDate = Carbon::parse($finalEntry['post_date']);
            $finalEntry['day'] = $startDate->day;
            $finalEntry['month'] = $startDate->shortMonthName;
            $finalEntry['year'] = $startDate->year;
            $finalEntry['slug'] = $entry->slug;
            $finalEntry['post_date'] =  $startDate;
            $finalEntry['published'] = $entry->published;
            return (object) $finalEntry;
        })->where('published', true);
    }
}
