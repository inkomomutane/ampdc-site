<?php

namespace App\Http\Controllers;

use App\helpers\Intervention;
use Illuminate\Support\Carbon;
use RalphJSmit\Laravel\SEO\SchemaCollection;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class InterventionArea extends Controller
{

    public function single($slug)
    {
        $area = Intervention::single($slug);
       return view('areas-single', [
           'area' => $area,
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
