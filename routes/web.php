<?php

use Illuminate\Support\Facades\Route;

// Controllers 
use App\Http\Controllers\Brief;
use App\Http\Controllers\Wellcome;
use App\Http\Controllers\Faq;
use App\Http\Controllers\Service;
use App\Http\Controllers\CollaborativeProcess;
use App\Http\Controllers\About;
use App\Http\Controllers\Contact;
use App\Http\Controllers\TeamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Wellcome route --------------------------------------------
Route::get('/', Wellcome::class)->name('index');
// -----------------------------------------------------------

// faqs routrs ----------------------------------------------

Route::prefix('service')->group(function () {

    Route::get('/', Service::class)->name('service');
    Route::get('/{id?}/{title?}', [Service::class,'detail'])->name('service.detail');

});

// ----------------------------------------------------------

// faqs routrs ----------------------------------------------

Route::prefix('faq')->group(function () {

    Route::get('/', Faq::class)->name('faq');
    Route::get('/{id?}/{title?}', Faq::class)->name('faq.answer');

});

// ----------------------------------------------------------

// brief routes ---------------------------------------------

Route::get('/brief', Brief::class)->name('brief');
Route::post('/brief', [Brief::class,'store']);

// -----------------------------------------------------------

// collaborative process route ------------------------------
Route::get('/collaborative-process', CollaborativeProcess::class)->name('process');

// ------------------------------------------------------------


// about route ------------------------------
Route::get('/about', About::class)->name('about');

// ------------------------------------------------------------

// brief routes ---------------------------------------------

Route::get('/contact', Contact::class)->name('contact');
Route::post('/contact', [Contact::class,'store']);

// -----------------------------------------------------------

// find team route ------------------------------

Route::prefix('team')->group(function () {
    Route::get('/', TeamController::class )->name('team');
    Route::get('/{id?}/{title?}', [TeamController::class,'detail'])->name('team.detail');
});


