<?php

namespace App\helpers;

use Illuminate\Support\Carbon;
use Statamic\Eloquent\Entries\Entry;


class EventEntries
{

    public static function event(String $slug)
    {
        $event =   Entry::query()->whereCollection('events')->get()->map(function ($entry) {
            $finalEntry = $entry->fileData();
            $startDate = Carbon::parse($finalEntry['start_date']);
            $finalEntry['day'] = $startDate->day;
            $finalEntry['month'] = $startDate->shortMonthName;
            $finalEntry['year'] = $startDate->year;
            $finalEntry['start_time'] = $startDate->hour . ':' . $startDate->minute;
            $finalEntry['start_date_info'] =  Carbon::parse($finalEntry['start_date'])->diffForHumans();
            $finalEntry['start_date'] =  Carbon::parse($finalEntry['start_date']);
            $finalEntry['slug'] = $entry->slug;
            $finalEntry['published'] = $entry->published;
            return (object) $finalEntry;
        })->where('published', true)
            ->where('start_date', '>=', now())
            ->where('slug', $slug)?->first();
        abort_if(is_null($event), 404);
        return $event;
    }

    public static function events()
    {
        return  Entry::query()->whereCollection('events')->get()->map(function ($entry) {
            $finalEntry = $entry->fileData();
            $startDate = Carbon::parse($finalEntry['start_date']);
            $finalEntry['day'] = $startDate->day;
            $finalEntry['month'] = $startDate->shortMonthName;
            $finalEntry['year'] = $startDate->year;
            $finalEntry['start_time'] = $startDate->hour . ':' . $startDate->minute;
            $finalEntry['start_date_info'] =  Carbon::parse($finalEntry['start_date'])->diffForHumans();
            $finalEntry['start_date'] =  Carbon::parse($finalEntry['start_date']);
            $finalEntry['slug'] = $entry->slug;
            $finalEntry['published'] = $entry->published;
            return (object) $finalEntry;
        })->where('published', true)->where('start_date', '>=', now());
    }
}