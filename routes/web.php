<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Dash\ProductController;
use App\Http\Controllers\Dash\PurchaseTransactionController;
use App\Http\Controllers\Dash\StoreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::get('/', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('website', function () {
    return view('website.website');
})->name('website');

Route::middleware('auth')
    ->controller(StoreController::class)->group(function () {
        Route::get('stores', 'index')->name('stores');
        Route::get('store/edit/{id}', 'edit')->name('store.edit');
        Route::get('store/create', 'create')->name('store.create');
        Route::post('store/store', 'store')->name('store.store');
//    Route::get('store/show/{id}', 'show')->name('store.show');
        Route::post('store/update/{id}', 'update')->name('store.update');
        Route::post('store/destroy/{id}', 'destroy')->name('store.destroy');
        Route::post('store/restore/{id}', 'restore')->name('store.restore');
        Route::get('store/search', 'search')->name('store.search');
    });

Route::middleware('auth')
    ->controller(ProductController::class)->group(function () {
        Route::get('products', 'index')->name('products');
        Route::get('product/edit/{id}', 'edit')->name('product.edit');
        Route::get('product/create', 'create')->name('product.create');
        Route::post('product/store', 'store')->name('product.store');
        Route::get('product/show/{id}', 'show')->name('product.show');
        Route::post('product/update/{id}', 'update')->name('product.update');
        Route::post('product/destroy/{id}', 'destroy')->name('product.destroy');
        Route::post('product/restore/{id}', 'restore')->name('product.restore');
        Route::get('product/search', 'search')->name('product.search');

    });

Route::middleware('auth')
    ->controller(PurchaseTransactionController::class)->group(function () {
        Route::get('transactions', 'index')->name('transactions');
        Route::get('report', 'report')->name('report');
//        Route::get('transaction/edit/{id}', 'edit')->name('transaction.edit');
//        Route::get('transaction/create', 'create')->name('transaction.create');
//        Route::post('transaction/store', 'store')->name('transaction.store');
//        Route::get('transaction/show/{id}', 'show')->name('transaction.show');
//        Route::post('transaction/update/{id}', 'update')->name('transaction.update');
//        Route::post('transaction/destroy/{id}', 'destroy')->name('transaction.destroy');
//        Route::post('transaction/restore/{id}', 'restore')->name('transaction.restore');
    });

Route::controller(\App\Http\Controllers\Website\StoreController::class)->group(function () {
    Route::get('website/stores', 'index')->name('website.stores');
//    Route::get('website/store/edit/{id}', 'edit')->name('website.store.edit');
//    Route::get('website/store/create', 'create')->name('website.store.create');
//    Route::post('website/store/store', 'store')->name('website.store.store');
//    Route::get('website/store/show/{id}', 'show')->name('website.store.show');
//    Route::post('website/store/update/{id}', 'update')->name('website.store.update');
//    Route::post('website/store/destroy/{id}', 'destroy')->name('website.store.destroy');
//    Route::post('website/store/restore/{id}', 'restore')->name('website.store.restore');
    Route::get('website/store/search', 'search')->name('website.store.search');
});

Route::controller(\App\Http\Controllers\Website\ProductController::class)->group(function () {
    Route::get('website/products', 'index')->name('website.products');
//    Route::get('website/product/edit/{id}', 'edit')->name('website.product.edit');
//    Route::get('website/product/create', 'create')->name('website.product.create');
//    Route::post('website/product/store', 'store')->name('website.product.store');
    Route::get('website/product/show/{id}', 'show')->name('website.product.show');
//    Route::post('website/product/update/{id}', 'update')->name('website.product.update');
//    Route::post('website/product/destroy/{id}', 'destroy')->name('website.product.destroy');
//    Route::post('website/product/restore/{id}', 'restore')->name('website.product.restore');
    Route::get('website/product/search', 'search')->name('website.product.search');
    Route::get('website/store/products/{id}', 'storeproducts')->name('website.store.products');
});

Route::controller(\App\Http\Controllers\Website\PurchaseTransactionController::class)->group(function () {
//    Route::get('website/transactions/{id}', 'index')->name('website.transactions');
//    Route::get('website/transaction/edit/{id}', 'edit')->name('website.transaction.edit');
//    Route::get('website/transaction/create', 'create')->name('website.transaction.create');
    Route::get('website/transaction/store/{id}', 'store')->name('website.transaction.store');
//    Route::get('website/transaction/show/{id}', 'show')->name('website.transaction.show');
//    Route::post('website/transaction/update/{id}', 'update')->name('website.transaction.update');
//    Route::post('website/transaction/destroy/{id}', 'destroy')->name('website.transaction.destroy');
//    Route::post('website/transaction/restore/{id}', 'restore')->name('website.transaction.restore');
});


//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

//require __DIR__.'/auth.php';
