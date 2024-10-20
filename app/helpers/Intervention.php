<?php

namespace App\helpers;

use Statamic\Eloquent\Entries\Entry;

class Intervention
{
    public static function single(String $slug)
    {
        $event =   Entry::query()->whereCollection('intervention')->get()->map(function ($entry) {
            $finalEntry = $entry->fileData();
            $finalEntry['slug'] = $entry->slug;
            $finalEntry['published'] = $entry->published;
            return (object) $finalEntry;
        })->where('published', true)
            ->where('slug', $slug)?->first();
        abort_if(is_null($event), 404);
        return $event;
    }

    public static function all()
    {
        return  Entry::query()->whereCollection('intervention')->get()->map(function ($entry) {
            $finalEntry = $entry->fileData();
            $finalEntry['slug'] = $entry->slug;
            $finalEntry['published'] = $entry->published;
            return (object) $finalEntry;
        })->where('published', true);
    }
}
