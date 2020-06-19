<?php



//Redirigire al inicio
Route::get('/', 'HomeController@index')->name('inicio');

//Ruta Login
Route::get('auth/login', 'Seguridad\LoginController@index')->name('login');
Route::post('auth/login', 'Seguridad\LoginController@login')->name('login.inicio');
Route::get('auth/logout','Seguridad\LoginController@logout')->name('logout');
Route::get('registro')->name('login.registrar');

//Rutas para el acceso de Admin
Route::group(['prefix' => 'admin', 'namespace' => 'admin', 'middleware' => ['auth', 'superAdmin']], function () { // Con un callback dentro de la ruta no sirve Para cachear la ruta
    //Inicio de Logueo
    Route::get('', 'AdminController@index')->name('');
    //Rutas Permiso
    Route::get('permiso', 'PermisoController@index')->name('permiso.index');
    Route::get('permiso/crear', 'PermisoController@create')->name('permiso.crear');
    //Rutas Menu
    Route::get('menu', 'MenuController@index')->name('menu.index');
    Route::get('menu/crear', 'MenuController@create')->name('menu.create');
    Route::post('menu', 'MenuController@store')->name('menu.store');
    Route::post('menu/guardar', 'MenuController@guardarOrden')->name('guardar.orden');
    //Rutas Rol
    Route::get('rol', 'RolController@index')->name('rol.index');
    Route::get('rol/crear', 'RolController@create')->name('rol.create');
    Route::post('rol', 'RolController@store')->name('rol.store');
    Route::get('rol/{id}/editar', 'RolController@edit')->name('rol.edit');
    Route::put('rol/{id}', 'RolController@update')->name('rol.update');//Que es para actulizar
    Route::delete('rol/{id}','RolController@destroy')->name('rol.delete');
    //Menu-Rol
    Route::get('menu-rol', 'MenuRolController@index')->name('menu-rol.index');
});

//Calzados
Route::get('/calzados', 'CalzadoController@index')->name('calzado.lista');
Route::get('/calzados/adidas', 'CalzadoController@show')->name('calzado.mostrar');

//Vistas
Route::view('/nosotros', 'contacto.nosotros')->name('nosotros');
Route::view('/contacto', 'contacto.contacto')->name('contacto');
Route::view('/404', '404.404')->name('error.page');