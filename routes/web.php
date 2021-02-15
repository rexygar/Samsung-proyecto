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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// MainController (Control de Paguina Principal)

// Productos
Route::get('/home', [App\Http\Controllers\MainController::class, 'getProductos1']);
Route::get('/home', [App\Http\Controllers\MainController::class, 'getProductos2']);
Route::get('/home', [App\Http\Controllers\MainController::class, 'getProductos3']);

// Carrito
Route::get('/home', [App\Http\Controllers\MainController::class, 'addCarrito']);
Route::get('/home', [App\Http\Controllers\MainController::class, 'getCarrito']);

// ProductController
