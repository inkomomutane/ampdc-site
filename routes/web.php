<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\InterventionArea;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsPageController;
use Illuminate\Support\Carbon;
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
Route::get('/about-us', AboutUsController::class)->name('about.us');
Route::get('/area/{slug}',[InterventionArea::class,'single'])->name('area.single');
