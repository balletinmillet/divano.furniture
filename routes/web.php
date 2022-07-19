<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\Admin\IndexController as AdminIndexController;

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
    Route::get('{category}/{product}', [CatalogController::class, 'product'])->name('product'); // категория каталога товаров
});

/*
 * Панель управления магазином для администратора сайта
 */
Route::group([
    'as' => 'admin.', // имя маршрута, например admin.index
    'prefix' => 'admin', // префикс маршрута, например admin/index
    //'namespace' => 'Admin', // пространство имен контроллера
    //'middleware' => ['auth', 'admin'] // один или несколько посредников
], function () {
    // главная страница панели управления
    Route::get('index', AdminIndexController::class)->name('index');
});



