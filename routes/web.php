<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\SaleTransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('/home',[DashboardController::class, 'home'])->name('home');
   
    Route::get('/product',[ProductController::class, 'product'])->name('product');
    Route::get('/priceUpdate/{id}',[ProductController::class, 'priceUpdate'])->name('priceUpdate');
    Route::post('/updatePriceStore',[ProductController::class, 'updatePriceStore'])->name('updatePriceStore');

    Route::get('/product/create',[ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store',[ProductController::class, 'store'])->name('product.store');


    Route::get('/sales',[SalesController::class, 'sales'])->name('sales');
    Route::post('/salesStore',[SalesController::class, 'store'])->name('sales.store');
});
