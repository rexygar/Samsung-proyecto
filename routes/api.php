<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// API
Route::get('/Subir', [App\Http\Controllers\ApiController::class, 'Subir']);
Route::get('/Descargar', [App\Http\Controllers\ApiController::class, 'Descargar']);
Route::get('/Bloquear', [App\Http\Controllers\ApiController::class, 'Bloquear']);
Route::get('/Desbloquear', [App\Http\Controllers\ApiController::class, 'Desbloquear']);
