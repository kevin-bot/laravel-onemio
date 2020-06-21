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

Route::get('/usuarios','UsuarioController@listar')->name('listarusuarios');
Route::get('/guardar', 'UsuarioController@guardar')->name('guardarusuario');
Route::get('/actualizar', 'UsuarioController@actualizar')->name('actualizarusuario');
Route::get('/eliminar', 'UsuarioController@eliminar')->name('eliminarusuario');
Route::get('/buscar', 'UsuarioController@buscar')->name('buscarusuario');
Route::get('/algunas', 'UsuarioController@algunarcolumnas')->name('algunarcolumnas');
