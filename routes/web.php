<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EntradasController;
use App\Http\Controllers\SalidasController;


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

//ruta login

Route::get('login', LoginController::class);

//rutas entradas

Route::get('entradas', [EntradasController::class, 'index']);

Route::get('entradas/create', [EntradasController::class, 'create']);

Route::get('entradas/show', [EntradasController::class, 'show']);

//rutas salidas

Route::get('salidas', [SalidasController::class, 'index']);

Route::get('salidas/create', [SalidasController::class, 'create']);

Route::get('salidas/show', [SalidasController::class, 'show']);
