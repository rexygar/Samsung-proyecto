<?php

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

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Productos
Route::get('/Categoria/{category}',                         [App\Http\Controllers\MainController::class, 'getProductos1']);
Route::get('/Categoria/{category}/{subCategory}',           [App\Http\Controllers\MainController::class, 'getProductos2']);
Route::get('/Categoria/{category}/{subCategory}/{other}',   [App\Http\Controllers\MainController::class, 'getProductos3']);
Route::get('/Product/{sku}',                                [App\Http\Controllers\MainController::class, 'getProduct']);

// Carrito
Route::get('/addCarrito',   [App\Http\Controllers\MainController::class, 'addCarrito'])->name('carrito.add');
Route::get('/Carrito',      [App\Http\Controllers\MainController::class, 'getCarrito'])->name('carrito');

// Transbank
Route::get('/checkout',                     [App\Http\Controllers\TransbankController::class, 'initTransaction'])->name('checkout');  
Route::post('/checkout/webpay/response',    [App\Http\Controllers\TransbankController::class, 'response'])->name('checkout.webpay.response');  
Route::post('/checkout/webpay/finish',      [App\Http\Controllers\TransbankController::class, 'finish'])->name('checkout.webpay.finish');