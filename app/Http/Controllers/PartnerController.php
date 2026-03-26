<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PartnerController
{
    public function index()
    {
        $response = Http::get(env('STRAPI_URL') . '/api/partners?populate=*');

        $partners = $response->json()['data'] ?? [];

        return view('partials.partiners', compact('partners'));
    }
}