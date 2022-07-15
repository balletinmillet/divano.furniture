<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', IndexController::class)->name('index');
Route::get('/catalog', [CatalogController::class, 'catalog'])->name('catalog');
