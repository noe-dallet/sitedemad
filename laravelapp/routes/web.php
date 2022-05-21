<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('accueil');
});
Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('/calendrier', function () {
    return view('calendrier');
});
Route::get('/presentation_bde', function () {
    return view('presentation_bde');
});
Route::get('/propositions', function () {
    return view('propositions');
});
Route::get('/boutique', function () {
    return view('boutique');
});
Route::get('/mention_legales', function () {
    return view('mention_legales');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/evenements', function () {
    return view('evenements');
});

Route::get('/boutique', function () {
    return view('boutique/boutique');
});

Route::get('/boutique-article', function () {
    return view('boutique/boutique-article');
});

Route::get('/boutique-cart', function () {
    return view('boutique/boutique-cart');
});

Route::get('/boutique-merci', function () {
    return view('boutique/boutique-merci');
});

Route::get('/boutique-pay', function () {
    return view('vendor/getcandy/stripe/components/payment-form');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
