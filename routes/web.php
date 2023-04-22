<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\rioWebsite\PagesController;

use App\Http\Controllers\rioAdmin\DashboardController;
use App\Http\Controllers\rioAdmin\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/our-foods', [PagesController::class, 'ourFoods'])->name('our-foods');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    /**************************************** Product Routes *****************************************/
    Route::get('/product/list', [ProductController::class, 'index'])->name('product.list');
    Route::get('/product/detail/{id}', [ProductController::class, 'detail'])->name('product.detail');

    Route::get('/product/create', [ProductController::class, 'productCreateForm'])->name('product.create');
    Route::post('/product/create', [ProductController::class, 'create'])->name('product.create');

    Route::get('/product/update/{id}', [ProductController::class, 'productUpdateForm'])->name('product.update');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');

    Route::post('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    Route::post('/product/status/{id}', [ProductController::class, 'status'])->name('product.status');
    /**************************************** Product Routes End *****************************************/


});
