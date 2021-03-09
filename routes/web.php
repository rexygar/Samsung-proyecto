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

Auth::routes();

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\MainController::class, 'index2'])->name('home');

// Productos
Route::get('/Categoria/{superCategory}',                                    [App\Http\Controllers\MainController::class, 'getProductos1']);
Route::get('/Categoria/{superCategory}/{category}',                         [App\Http\Controllers\MainController::class, 'getProductos2']);
Route::get('/Categoria/{superCategory}{category}/{subCategory}',            [App\Http\Controllers\MainController::class, 'getProductos3']);
Route::get('/Categoria/{superCategory}{category}/{subCategory}/{other}',    [App\Http\Controllers\MainController::class, 'getProductos4']);
Route::get('/Product/{sku}',                                [App\Http\Controllers\MainController::class, 'getProduct']);

// Carrito
Route::get('/addCarrito',           [App\Http\Controllers\MainController::class, 'addCarrito'])->name('carrito.add');
Route::get('/deleteCarrito',        [App\Http\Controllers\MainController::class, 'removeCarrito'])->name('carrito.delete');
Route::get('/Carrito',              [App\Http\Controllers\MainController::class, 'getCarrito'])->name('carrito');


// Transbank
Route::get('/checkout',                     [App\Http\Controllers\TransbankController::class, 'initTransaction'])->name('checkout');  
Route::post('/checkout/webpay/response',    [App\Http\Controllers\TransbankController::class, 'response'])->name('checkout.webpay.response');  
Route::post('/checkout/webpay/finish',      [App\Http\Controllers\TransbankController::class, 'finish'])->name('checkout.webpay.finish');

Route::get('/perfiles', [App\Http\Controllers\UsuarioController::class, 'perfil'])->name('perfiles');
Route::post('/perfileditar', [App\Http\Controllers\UsuarioController::class, 'update_perfil'])->name('perfil.update');

Route::get('/Paguina-Mantencion',  [App\Http\Controllers\ApiController::class, 'Mantencion'])->name('Mantencion');

Route::get('/ej', function () {
    return view('welcome');
});
Route::get('/pro', function () {
    return view('Components.producto-card');
});
Route::get('/nav', function () {
    return view('Components.navBar');
});
Route::get('/fil', function () {
    return view('Components.filtros');
});
Route::get('/bread', function () {
    return view('Components.breadcrumbs');
});
Route::get('/producto', function () {
    return view('Vistas.producto');
});
Route::get('/carrito', function () {
    return view('Vistas.carrito');
});
Route::get('/tests', function () {
    return view('Vistas.tests');
});
Route::get('/categoria', function () {
    return view('Vistas.categoria');
});

Route::get('/busqueda', function () {
    return view('Vistas.busqueda');
});
Route::get('/loMvendido', function () {
    return view('Components.loMvendido');
});
Route::get('/loMvisto', function () {
    return view('Components.loMvisto');
});
Route::get('/carousel', function () {
    return view('Components.carousel');
});
Route::get('/destacados', function () {
    return view('Components.destacados');
});

Route::get('/adminPanel', function(){
    return view('dashboard.dashboard');
});

Route::get('/ListaProductos', [App\Http\Controllers\MainController::class, 'listProduct'])->name('product.list');