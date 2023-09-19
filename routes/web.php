<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsPageController;
use Illuminate\Support\Facades\Route;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use RalphJSmit\Laravel\SEO\SchemaCollection;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomePageController::class)->name('welcome');
Route::get('/news', NewsController::class)->name('news');
Route::get('/news/{slug}', NewsPageController::class)->name('news.page');
Route::get('/event/{slug}', EventController::class)->name('event');
Route::get('/contact', ContactController::class)->name('contact');
Route::post('/contact/message', ContactMessageController::class)->name('contact.message');
Route::get('/about-us', fn () => view('about-us', [
    'SEOData' => new SEOData(
        title: 'Sobre nós',
        description: 'Somos uma organização sem fins lucrativos com 4 anos de existência,
         comprometida em promover a protecção social da criança na província de Sofala,
         Moçambique. Nossas actividades são baseadas na vasta experiência e aprendizado
         adquiridos por meio de parcerias com renomadas Organizações da Sociedade Civil e Públicas,
          como ESSOR, CCM, OASIS, PNDH, e a Universidade Zambeze.',
        author: 'Nelson Alexandre Mutane',
        site_name: 'Sobre nós',
        section: 'Grupo técnico de protecção social.',
        type: 'article',
        image: Vite::asset('resources/images/logo.webp'),
        schema: SchemaCollection::initialize()->addArticle(),
    ),
]))->name('about.us');
