<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/reddress', function () {
    return view('reddress'); // Nama file blade tanpa .blade.php
})->name('reddress');

// Menggunakan CatalogController untuk catalog
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
