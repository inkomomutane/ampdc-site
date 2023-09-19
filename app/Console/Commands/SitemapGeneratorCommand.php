<?php

namespace App\Console\Commands;

use App\helpers\ArticleEntries;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Vite;


class SitemapGeneratorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate website sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {


        try {
            Sitemap::create(config('app.url'))
                ->add(Url::create(route('welcome'))->addImage(Vite::asset('/resources/images/logo.webp')))
                ->add(Url::create(route('contact'))->addImage(Vite::asset('resources/images/logo.webp')))
                ->add(Url::create(route('about.us'))->addImage(Vite::asset('resources/images/logo.webp')))
                ->add(ArticleEntries::articles()->map(function ($entry) {
                    return Url::create(route('news.page', [
                        'slug' => $entry?->slug ?? '1'
                    ]))->setLastModificationDate(Carbon::createFromTimestamp($entry->updated_at ?? now()->getTimestamp()));
                }))
                ->add(Url::create(config('app.url') . '/sitemap.xml'))
                ->writeToFile(public_path('sitemap.xml'));

            $this->info('Sitemap generated successful!');
        } catch (\Throwable $th) {
            $this->error($th);
        }
    }
}
