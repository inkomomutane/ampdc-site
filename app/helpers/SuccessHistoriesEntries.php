<?php

namespace App\helpers;

use Illuminate\Support\Carbon;
use Statamic\Eloquent\Entries\Entry;

class SuccessHistoriesEntries
{
    public static function successHistories()
    {
        return  Entry::query()->whereCollection('success_histories')->get()->map(function ($entry) {
            $finalEntry = $entry->fileData();
            $historyDate = Carbon::parse($finalEntry['history_date']);
            $finalEntry['history_date'] = $historyDate;
            $finalEntry['published'] = $entry->published;
            return (object) $finalEntry;
        })->where('published', true)->sortByDesc('history_date');
    }
}
