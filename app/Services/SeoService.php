<?php

namespace App\Services;

use RalphJSmit\Laravel\SEO\Support\SEOData;
use RalphJSmit\Laravel\SEO\SchemaCollection;

class SeoService
{
    public static function make(array $data): SEOData
    {
        return new SEOData(
            title: $data['title'] ?? '',
            description: $data['description'] ?? '',
            author: 'AMPDC',
            image: $data['image'] ?? '',
            published_time: $data['published_time'] ?? now(),
            modified_time: $data['modified_time'] ?? now(),
            section: $data['section'] ?? '',
            schema: SchemaCollection::initialize()->addArticle(),
            type: $data['type'] ?? 'website',
            site_name: $data['site_name'] ?? config('app.name'),
        );
    }
}