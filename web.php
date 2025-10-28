<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Rute untuk Dashboard (Fungsi Anonim) - DITARUH DI LUAR GRUP

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Menggunakan Route Group untuk PageController
Route::controller(PageController::class)->group(function () {
    
    // Route untuk Halaman Selamat Datang (Root)
    Route::get('/', 'welcome');

    // Route untuk Halaman Home
    Route::get('/home', 'home');

    // Route untuk Halaman About
    Route::get('/about', 'about');

    // Route untuk Halaman Kontak
    Route::get('/contact', 'contact');

    // Route untuk Halaman Layanan
    Route::get('/services', 'services');
}); // Penutup Route::group() yang benar