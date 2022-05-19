<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ProductoController;
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

Route::resource('Categoria', CategoriaController::class);
Route::resource('Estado', EstadoController::class);
Route::resource('Producto', ProductoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
