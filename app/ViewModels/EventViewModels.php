namespace App\ViewModels;

use Carbon\Carbon;

class EventViewModel
{
    public static function make($item): array
    {
        $date = isset($item['start_date'])
            ? Carbon::parse($item['start_date'])
            : now();

        return [
            'id' => $item['id'] ?? null,
            'title' => $item['title'] ?? '',
            'slug' => $item['slug'] ?? '',
            'description' => self::parseRichText($item['description'] ?? ''),
            'location' => $item['location'] ?? '',
            'cover' => config('services.strapi.url') . ($item['cover_image']['url'] ?? ''),
            'day' => $date->format('d'),
            'month' => $date->translatedFormat('M'),
        ];
    }

    private static function parseRichText($content): string
    {
        if (!is_array($content)) return $content;

        return collect($content)
            ->pluck('children')
            ->flatten(1)
            ->pluck('text')
            ->implode(' ');
    }
}