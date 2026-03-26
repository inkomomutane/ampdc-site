<?php

namespace App\Services;

class ArticleService
{
    public function __construct(
        protected StrapiService $strapi
    ) {}

    public function list($limit = 8)
    {
        return $this->strapi->collection('noticias', [
            'pagination[pageSize]' => $limit,
            'sort' => 'post_date:desc'
        ]);
    }

    public function findBySlug($slug)
    {
        $data = $this->strapi->collection('noticias', [
            'filters[slug][$eq]' => $slug,
            'pagination[pageSize]' => 1
        ]);

        return $data[0] ?? null;
    }
}