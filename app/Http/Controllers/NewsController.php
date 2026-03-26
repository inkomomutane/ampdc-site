<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Vite;

class NewsController extends Controller
{
    public function __invoke(Request $request)
    {
        $page = $request->get('page', 1);

        // 🔹 Buscar artigos
        $response = Http::get(config('services.strapi.url') . '/api/eventos', [
            'populate' => '*',
            'pagination[page]' => $page,
            'pagination[pageSize]' => 6,
            'sort' => 'start_date:desc'
        ]);

        $data = $response->json();

        $eventosRaw = $data['data'] ?? [];

        // 🔹 Buscar destaque
        $featuredResponse = Http::get(config('services.strapi.url') . '/api/eventos?filters[featured][$eq]=true&populate=*', [
            'filters[featured][$eq]' => true,
            'populate' => '*',
            'pagination[pageSize]' => 1
        ]);

        $featuredData = $featuredResponse->json()['data'] ?? [];

        $evento = count($featuredData) ? $this->transform($featuredData[0]) : null;

        //dd($data);

        // 🔹 Transformar lista
        $eventos = collect($eventosRaw)->map(function ($item) use ($evento) {
            $transformed = $this->transform($item);

            // remover destaque da lista
            if ($evento && $transformed['id'] === $evento['id']) {
                return null;
            }

            return $transformed;
        })->filter();

        return view('news', [
            'eventos' => $eventos,
            'evento' => $evento,
            'SEOData' => new SEOData(
                title: 'AMPDC - Actividades realizadas',
                description: 'Todas actividades realizadas pelo AMPDC...',
                author: 'Nelson Alexandre Mutane',
                image: Vite::asset('resources/images/logo.webp'),
                published_time: Carbon::createFromDate(2023, 9, 20),
                modified_time: Carbon::createFromDate(2023, 9, 20),
                section: 'AMPDC - Actividades realizadas',
                schema: SchemaCollection::initialize(),
                type: 'website',
                site_name: 'AMPDC - Actividades realizadas'
            )
        ]);
    }

    private function transform($item){
    $attr = $item; // v5 já vem direto

    $date = isset($attr['start_date'])
        ? \Carbon\Carbon::parse($attr['start_date'])
        : now();

    return [
        'id' => $attr['id'] ?? null,
        'title' => $attr['title'] ?? '',
        'slug' => $attr['slug'] ?? '',
        'short_description' => $this->parseRichText($attr['description'] ?? ''),
        'location' => $attr['location'] ?? '',
        'category' => 'Evento',
        'cover_image' => $this->getImage($attr),
        'day' => $date->format('d'),
        'month' => $date->translatedFormat('M'),
        'year' => $date->format('Y'),
    ];
}

    private function getImage($attr){
        if (!isset($attr['cover_image']['url'])) {
            return null;
        }
        return 
            config('services.strapi.url'). $attr['cover_image']['url'];
    }

    private function parseRichText($content){
        if (!is_array($content)) {
            return $content ?? '';
        }

        return collect($content)
            ->pluck('children')
            ->filter()
            ->flatten(1)
            ->pluck('text')
            ->filter()
            ->implode(' ');
    }

}