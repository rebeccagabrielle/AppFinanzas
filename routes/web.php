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

//rutas ========================= entradas
Route::get('entradas',        [EntradasController::class, 'index'])->name('entradas.index.get');
Route::get('entradas/create', [EntradasController::class, 'create'])->name('entradas.create.get');
Route::get('entradas/show',   [EntradasController::class, 'show'])->name('entradas.show.get');
//Post
Route::post('entradas/create',[EntradasController::class, 'create_post'])->name('entradas.create.post');



//rutas ========================= salidas
Route::get('salidas',         [SalidasController::class, 'index'])->name('salidas.index.get');
Route::get('salidas/create',  [SalidasController::class, 'create'])->name('salidas.create.get');
Route::get('salidas/show',    [SalidasController::class, 'show'])->name('salidas.show.get');
//post
Route::post('salidas/create', [SalidasController::class, 'create_post'])->name('salidas.create.post');
