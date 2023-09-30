<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HomeController;

Route::get('home', [HomeController::class, 'index']);
Route::post('/contact-us', [HomeController::class, 'contactUs']);
