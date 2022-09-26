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

Route::get('/', function () {
    $randomNumber = rand(1,100);
    return view('home', ['numeroCasuale' => $randomNumber]);
});

Route::get('/blog', function() {
    return view('blog');
});

Route::get('/careers', function() {
    return view('careers');
})->name('pageCareers');

Route::get('/about', function() {
    return view('about');
})->name('pageAbout');