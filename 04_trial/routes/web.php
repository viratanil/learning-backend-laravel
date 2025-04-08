<?php

use Illuminate\Support\Facades\Route;
use App\Models\Menu;
use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class,'index'])->name('index');

