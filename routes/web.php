<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('home');
Route::post('contact', [HomeController::class, 'contact'])->name('contact-store');

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "Cache is cleared";
});
Route::get('migrate', function () {
    Artisan::call('migrate');
    return "Migrate Completed!";
});
Route::get('optimize', function () {
    Artisan::call('optimize');
    return "optimized!";
});