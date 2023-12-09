<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\UsuariosController;
use App\Models\Categoria;

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
    return view('layouts.Master');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('home', 'index')->name('home');

});


Route::controller(UsuariosController::class)->group(function () {
    Route::get('usuarios', 'index')->name('usuarios');

});

Route::controller(CategoriaController::class)->group(function () {
    Route::get('categoria', 'index')->name('categoria');
    Route::get('getCategorias', 'getCategorias')->name('getCategorias');

});

