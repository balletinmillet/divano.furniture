<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SkuController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\PropertyOptionController;

Route::get('/', IndexController::class)->name('index');

/**  Каталог товаров: категория, бренд и товар **/

Route::group([
    'as' => 'catalog.',
    'prefix' => 'catalog',
], function () {
    Route::get('/', [CatalogController::class, 'index'])->name('index');
    Route::get('{category}', [CatalogController::class, 'category'])->name('category');
    Route::get('{category}/{product}', [CatalogController::class, 'product'])->name('product');
});

/** Панель управления магазином для администратора сайта **/

Route::group([
    'as' => 'admin.',
    'prefix' => 'admin',
], function () {

    Route::get('index', AdminIndexController::class)->name('index');
    Route::group(['as' => 'catalog.', 'prefix' => 'catalog'], function () {

        Route::resource('category', CategoryController::class);
        Route::resource('brand', BrandController::class);
        Route::resource('product', ProductController::class);
        Route::resource('product/{product}/sku', SkuController::class);
        Route::resource('properties', PropertyController::class);
        Route::resource('properties/{property}/property-options', PropertyOptionController::class);
    });
});



