<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class StrapiService
{
    protected string $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('services.strapi.url');
    }

    private function get(string $endpoint, array $params = [])
    {
        return Http::get("{$this->baseUrl}/api/{$endpoint}", $params)->json();
    }

    // ✅ ESTE MÉTODO ESTÁ A FALTAR NO TEU ERRO
    public function collection(string $name, array $params = [])
    {
        $response = $this->get($name, array_merge([
            'populate' => '*'
        ], $params));

        return $response['data'] ?? [];
    }

    // (opcional mas útil)
    public function single(string $name)
    {
        $response = $this->get($name, [
            'populate' => '*'
        ]);

        return $response['data'] ?? null;
    }
}