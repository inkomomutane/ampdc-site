<?php

namespace App\Services;

class SuccessHistoriesService
{
    public function __construct(
        protected StrapiService $strapi
    ) {}

    public function list()
    {
        $data = $this->strapi->collection('historias-de-sucesso');

        return collect($data)->map(function ($item) {
        return [
            'title' => $item['title'] ?? '',
            'content' => $item['content'] ?? '',
            'image' => $item['image']['data']['url'] ?? null,
        ];
    });
    }

    public function findBySlug($slug)
    {
        $data = $this->strapi->collection('historias-de-sucesso', [
            'filters[slug][$eq]' => $slug,
            'pagination[pageSize]' => 1
        ]);

        return $data[0] ?? null;
    }
}