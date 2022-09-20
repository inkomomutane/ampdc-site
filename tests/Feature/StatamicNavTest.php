<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Statamic\Eloquent\Entries\Entry;
use Statamic\Statamic;
use Tests\TestCase;

class StatamicNavTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
         $response = $this->get('/');
        //  dd(Statamic::query('entries'));
        foreach (Statamic::query('entries')
        ->where('collection', 'pages')->get()
        as  $value) {
            dd($value->url);
        }

        $response->assertStatus(200);
    }
}
