<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ItemController::class, 'index']);
Route::post('/store', [ItemController::class, 'store'])->name('store');
Route::get('/edit/{id}', [ItemController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [ItemController::class, 'update'])->name('update');
Route::get('/delete/{id}', [ItemController::class, 'destroy'])->name('delete');
