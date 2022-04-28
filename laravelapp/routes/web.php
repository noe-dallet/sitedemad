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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('accueil');
});

Route::get('/accueil.html', function () {
    return view('accueil');
});

Route::get('/calendrier.html', function () {
    return view('calendrier');
});

Route::get('/presentation_bde.html', function () {
    return view('presentation_bde');
});

Route::get('/propositions.html', function () {
    return view('propositions');
});

Route::get('/boutique.html', function () {
    return view('boutique');
});

Route::get('/mention_legales.html', function () {
    return view('mention_legales');
});

Route::get('/contact.html', function () {
    return view('contact');
});
