<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use App\Services\InterventionService;

class InterventionArea extends Controller
{
    public function __construct(
        protected InterventionService $interventions
    ) {}

    public function single($slug)
    {
        $area = $this->interventions->single($slug);

        if (!$area) {
            abort(404);
        }

        return view('areas-single', compact('area'));
    }
}

class InterventionArea extends Controller
{
     public function __construct(
        protected InterventionService $interventions
    ) {}
    public function single($slug)
    {
        $area = $this->interventions->single($slug);

        if (!$area) {
            abort(404);
        }

       return view('areas-single', compact('area') + [
           'SEOData' => new SEOData(
               title: 'Area - ' .  $area?->title ?? '',
               description: $area?->description ?? '',
               author: 'Nelson Alexandre Mutane',
               image: public_path(). '/storage/' . $area?->image ?? '',
               published_time: Carbon::createFromDate(2024, 9, 20),
               modified_time: Carbon::createFromDate(2024, 9, 20),
               section: 'Evento - ' .  $area?->title ?? '',
               schema: SchemaCollection::initialize()->addArticle(),
               type: 'article',
               site_name: 'Area - ' .  $area?->title ?? ''
           )
       ]);
    }
}
