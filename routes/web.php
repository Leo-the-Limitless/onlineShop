<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [ProductController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/detail/{id}', [ProductController::class, 'detail']);

Route::get('/products/order/{id}', [ProductController::class, 'fillUp']);

Route::post('/products/order/{id}', [OrderController::class, 'order']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/orders', [OrderController::class, 'orderList']);

Route::get('/orders/cancel/{id}', [OrderController::class, 'cancel']);