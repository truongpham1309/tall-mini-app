<?php

use App\Http\Controllers\HomeHyraNetworkController;
use Illuminate\Support\Facades\Route;

/*
|-------------------------------------------------------------------------|
| Web Routes                                                              |
|-------------------------------------------------------------------------|
|                                                                         |
| Here is where you can register web routes for your application. These   |
| routes are loaded by the RouteServiceProvider and all of them will      |
| be assigned to the "web" middleware group. Make something great!        |
|_________________________________________________________________________|
*/

// Route::get('/', function () {
//     return view('home.page');
// });

// Route::get('/about-us', function () {
//     return view('about-us.page');
// });

// Route::get('/contact', function () {
//     return view('contact.page');
// });

// Route::get('/services', function () {
//     return view('services.page');
// });

// Route::get('/faq', function () {
//     return view('faq.page');
// });

// Route::get('/hyra-network', [HomeHyraNetworkController::class, 'index']);

Route::get('/', function () {
    return view('mini-app.home.page');
})->name('mini-app.home');

Route::get('/mini-app/categories', function () {
    return view('mini-app.categories.page');
})->name('mini-app.categories');

Route::get('/mini-app/detail', function () {
    return view('mini-app.detail.page');
})->name('mini-app.detail');
