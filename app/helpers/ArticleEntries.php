<?php
namespace App\helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;

class ArticleEntries
{
    public static function articles($limit = 8)
    {
        $response = Http::get(config('services.strapi.url') . '/api/noticias', [
            'populate' => '*',
            'pagination[pageSize]' => $limit,
            'sort' => 'post_date:desc',
        ]);

        $data = $response->json();

        if (!isset($data['data'])) {
            return collect();
        }

        return collect($data['data'])
        ->map(fn ($item) => self::transform($item))
        ->filter();
    }

    public static function article($slug)
{
    $response = Http::get(config('services.strapi.url') . '/api/noticias', [
        'filters[slug][$eq]' => $slug,
        'populate' => '*',
    ]);

    $data = $response->json();

    if (!isset($data['data'][0])) {
        return null;
    }

    return self::transform($data['data'][0]);
}

    private static function transform($item)
    {
        $date = isset($item['post_date'])
            ? Carbon::parse($item['post_date'])
            : now();

        return (object)[
            'id' => $item['id'] ?? null,
            'title' => $item['title'] ?? '',
            'slug' => $item['slug'] ?? '',
            'excerpt' => $item['excerpt'] ?? '',
            // 🔹 descrição
            'short_description' => self::parseRichText($item['content'] ?? ''),
            'location' => $item['location'] ?? '',
            'category' => 'Noticia',
            // 🔹 imagem principal
            'cover_image' => self::getImage($item['cover_image'] ?? null),
            // 🔹 galeria
            'gallery' => self::getGallery($item['gallery'] ?? []),
            // 🔹 datas
            'date' => $item['post_date'] ?? null,
            'day' => $date->format('d'),
            'month' => $date->translatedFormat('M'),
            'year' => $date->format('Y'),
        ];
    }

    // 🔹 imagem principal
    private static function getImage($image)
    {
        if (!$image || !isset($image['url'])) {
            return null;
        }

        return config('services.strapi.url') . $image['url'];
    }

    // 🔹 galeria
    private static function getGallery($gallery)
    {
        if (!is_array($gallery)) {
            return [];
        }

        return collect($gallery)->map(function ($img) {
            return isset($img['url'])
                ? config('services.strapi.url') . $img['url']
                : null;
        })->filter()->values()->toArray();
    }

    // 🔹 secções
    private static function getSections($sections)
    {
        if (!is_array($sections)) {
            return [];
        }

        return collect($sections)->map(function ($section) {
            return [
                'title' => $section['title'] ?? '',
                'content' => self::parseRichText($section['content'] ?? ''),
                'image' => isset($section['image']['url'])
                    ? config('services.strapi.url') . $section['image']['url']
                    : null,
            ];
        })->toArray();
    }

    // 🔹 rich text
    private static function parseRichText($content)
    {
        if (!is_array($content)) {
            return $content ?? '';
        }

        return collect($content)
            ->pluck('children')
            ->flatten(1)
            ->pluck('text')
            ->filter()
            ->implode(' ');
    }
}