<?php

namespace App\Services;

class InterventionService
{
    public function __construct(
        protected StrapiService $strapi
    ) {}

    public function all()
    {
        return $this->strapi->collection('interventions');
    }

    public function single($slug)
    {
        $data = $this->strapi->collection('interventions', [
            'filters[slug][$eq]' => $slug,
            'pagination[pageSize]' => 1
        ]);

        return $data[0] ?? null;
    }
}