<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);  // Contact Form Show
Route::post('/contact', [ContactController::class, 'store']); // Contact Form Submit

Route::get('/service', [ServiceController::class, 'index']);  // Service Form Show
Route::post('/service', [ServiceController::class, 'store']); // Service Form Submit

Route::get('/contacts', [ContactController::class, 'show']);


