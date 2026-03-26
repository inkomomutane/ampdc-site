<?php

namespace App\Services;

class EventService
{
    public function __construct(
        protected StrapiService $strapi
    ) {}

    public function list()
    {
        $response = $this->strapi->collection('events');

    return collect($response)->map(function ($item) {
        return [
            'id' => $item['id'],
            'title' => $item['title'] ?? '',
            'slug' => $item['slug'] ?? '',
            'location' => $item['location'] ?? '',
            'start_date' => $item['start_date'] ?? '',
        ];
    });
    }

    public function findBySlug($slug)
    {
        $data = $this->strapi->collection('eventos', [
            'filters[slug][$eq]' => $slug,
            'pagination[pageSize]' => 1
        ]);

        return $data[0] ?? null;
    }
}