<?php

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
    return view('index');
})->name('inicio');


Route::get('/calzados', 'CalzadoController@index')->name('calzado.lista');
Route::get('/calzados/adidas', 'CalzadoController@show')->name('calzado.mostrar');

Auth::routes();

//Route::get('/admin/permiso', 'Admin\PermisoController@index')->name('permiso.index'); //Para cachear la ruta 
//Admin
Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
    Route::get('permiso', 'PermisoController@index')->name('permiso.index');
    Route::get('permiso/crear', 'PermisoController@create')->name('permiso.crear');
    Route::get('menu', 'MenuController@index')->name('menu.index');
    Route::get('menu/crear', 'MenuController@create')->name('menu.create');
    Route::post('menu', 'MenuController@store')->name('menu.store');
});

//Vistas
Route::view('/nosotros', 'contacto.nosotros')->name('nosotros');
Route::view('/404', '404.404')->name('error.page');