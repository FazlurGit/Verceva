
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');