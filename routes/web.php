<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', IndexController::class)->name('index');


/*
 * Каталог товаров: категория, бренд и товар
 */
Route::group([
    'as' => 'catalog.', // имя маршрута, например catalog.index
    'prefix' => 'catalog', // префикс маршрута, например catalog/index
], function () {

    Route::get('/', [CatalogController::class, 'index'])->name('index'); // главная страница каталога
    Route::get('{category}', [CatalogController::class, 'category'])->name('category'); // категория каталога товаров
});



