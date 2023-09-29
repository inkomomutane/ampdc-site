<?php

use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Statamic\Eloquent\Entries\Entry;
use Statamic\Entries\Entry as EntriesEntry;
use Statamic\Facades\Entry as FacadesEntry;

Inspiring::quote();

// User::with('roles')->orderBy('created_at')->ddRawSql();

dd(Storage::disk('google')->makeDirectory('Lukas'));
