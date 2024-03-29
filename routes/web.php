<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SslCommerzPaymentController;

use App\Http\Controllers\rioWebsite\PagesController;
use App\Http\Controllers\rioWebsite\CartController;
use App\Http\Controllers\rioWebsite\OrderPlaceController;

use App\Http\Controllers\rioWebsite\CustomerController;
use App\Http\Controllers\rioWebsite\CustomerAuthController;

use App\Http\Controllers\rioAdmin\DashboardController;
use App\Http\Controllers\rioAdmin\ProductController;
use App\Http\Controllers\rioAdmin\CategoryController;
use App\Http\Controllers\rioAdmin\OrderController;
use App\Http\Controllers\TagController;



/*
|--------------------------------------------------------------------------
| Web Routes Start
|--------------------------------------------------------------------------
*/

Route::get('/order-success/{id}', [PagesController::class, 'success'])->name('success');

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/our-foods', [PagesController::class, 'ourFoods'])->name('our-foods');
Route::get('/checkout', [PagesController::class, 'checkout'])->name('checkout');
Route::get('/cart/add', [CartController::class, 'addCart'])->name('cart.add');
Route::post('/order/place', [OrderPlaceController::class, 'orderPlace'])->name('order.place');

/*
|--------------------------------------------------------------------------
| Web Routes END
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Customer Routes Start
|--------------------------------------------------------------------------
*/

Route::get('customer/login', [CustomerAuthController::class, 'login'])->name('customer.login');
Route::post('customer/login', [CustomerAuthController::class, 'loginValid'])->name('customer.login');
Route::get('customer/register', [CustomerAuthController::class, 'register'])->name('customer.register');
Route::post('customer/register', [CustomerAuthController::class, 'registration'])->name('customer.register');

Route::middleware(['customer'])->group(function () {
    Route::get('/customer/dashboard', [CustomerAuthController::class, 'index'])->name('customer.dashboard');
    Route::get('/customer/logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');
});

/*
|--------------------------------------------------------------------------
| Customer Routes END
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Admin Routes Start
|--------------------------------------------------------------------------
*/

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

    /**************************************** Product Category Routes *****************************************/
    Route::get('/category', [CategoryController::class, 'index'])->name('category');

    Route::post('/category/create', [CategoryController::class, 'create'])->name('category.create');

    Route::get('/category/detail/{id}', [CategoryController::class, 'detail'])->name('category.detail');

    Route::get('/category/update/{id}', [CategoryController::class, 'categoryUpdate'])->name('category.update');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');

    Route::post('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    Route::post('/category/status/{id}', [CategoryController::class, 'status'])->name('category.status');
    /**************************************** Product Category Routes End *****************************************/

    /**************************************** Product Tag Routes *****************************************/
    Route::get('/tag', [TagController::class, 'index'])->name('tag');

    Route::post('/tag/create', [TagController::class, 'create'])->name('tag.create');

    Route::get('/tag/detail/{id}', [TagController::class, 'detail'])->name('tag.detail');

    Route::get('/tag/update/{id}', [TagController::class, 'tagUpdate'])->name('tag.update');
    Route::post('/tag/update/{id}', [TagController::class, 'update'])->name('tag.update');

    Route::post('/tag/delete/{id}', [TagController::class, 'delete'])->name('tag.delete');
    Route::post('/tag/status/{id}', [TagController::class, 'status'])->name('tag.status');
    /**************************************** Product Tag Routes End *****************************************/

    /**************************************** Order Routes *****************************************/
    Route::get('/order/list', [OrderController::class, 'index'])->name('order.list');
    Route::get('/order/detail/{id}', [OrderController::class, 'detail'])->name('order.detail');

    Route::get('/order/create', [OrderController::class, 'orderCreateForm'])->name('order.create');
    Route::post('/order/create', [OrderController::class, 'create'])->name('order.create');

    Route::get('/order/update/{id}', [OrderController::class, 'orderUpdateForm'])->name('order.update');
    Route::post('/order/update/{id}', [OrderController::class, 'orderUpdate'])->name('order.update');

    Route::post('/order/delete/{id}', [OrderController::class, 'delete'])->name('order.delete');
    Route::post('/order/status/{id}', [OrderController::class, 'status'])->name('order.status');
    /**************************************** Order Routes End *****************************************/

    Route::get('/order/product/category/{cat_id}/{order_id}', [OrderController::class, 'productSearchByCat'])->name('order.product.category');
    Route::get('/ordered/custom/product', [OrderController::class, 'customOrderedProduct'])->name('ordered.custom.product');
    Route::get('/ordered/product/qty-update/{ordered_product_id}/{product_qty}', [OrderController::class, 'productQtyUpdate'])->name('ordered.product.qty-update');
    Route::get('/ordered/product/delete/{ordered_product_id}/{order_id}', [OrderController::class, 'orderedProductDel'])->name('ordered.product.delete');

    /**************************************** Customer Routes *****************************************/
    Route::get('/customer/list', [CustomerController::class, 'index'])->name('customer.list');
    Route::get('/customer/detail/{id}', [CustomerController::class, 'detail'])->name('customer.detail');

    Route::get('/customer/create', [CustomerController::class, 'customerCreateForm'])->name('customer.create');
    Route::post('/customer/create', [CustomerController::class, 'create'])->name('customer.create');

    Route::get('/customer/update/{id}', [CustomerController::class, 'customerUpdateForm'])->name('customer.update');
    Route::post('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');

    Route::post('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('customer.delete');
    Route::post('/customer/status/{id}', [CustomerController::class, 'status'])->name('customer.status');
    /**************************************** Customer Routes End *****************************************/




});

/*
|--------------------------------------------------------------------------
| Admin Routes END
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| SSLCOMMERZ  Routes Start
|--------------------------------------------------------------------------
*/

Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);

/*
|--------------------------------------------------------------------------
| SSLCOMMERZ  Routes END
|--------------------------------------------------------------------------
*/

