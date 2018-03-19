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

Route::resource('/', 'frontHomeController');
Route::resource('/rrhh','rrhhController');
Route::resource('/descargas','DescargasController');
Route::resource('/novedades','NovedadesController');
Route::resource('front_articulos', 'FrontArticulosController');
Route::resource('/registro', 'frontRegistrarClientesController');     #registrar usuario para cliente

Route::auth();
Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('usuarios', 'UsersController');
    Route::resource('roles', 'RolesController');
    Route::resource('paises', 'PaisesController');
    Route::resource('provincias', 'ProvinciasController');
    Route::resource('localidades', 'LocalidadesController');
    Route::resource('marcas', 'MarcasController');
    Route::resource('rubros', 'RubrosController');
    Route::resource('subrubros', 'SubrubrosController');
    Route::resource('articulos', 'ArticulosController');
    /**Presupuestos**/
    Route::resource('presupuestos', 'PresupuestosController');
    Route::post('cargar_archivo_correo', 'PresupuestosController@store'); //se llama por ajax (post) (1)
    Route::post('enviar_correo', 'PresupuestosController@enviar'); # (2)
    /**-Presupuestos**/
    
    Route::resource('catalogos', 'CatalogosController');

    Route::get('/configuracion', function () {  // esta ruta es solo para zafar, pero hay que hacer un controller con la info de la empresa
        return view('admin.configuracion.main');
    });
});



Route::get('/carrito/registrar_carrito', [
    'as' => 'carrito.registrar_carrito',
    'uses' => 'CarritoController@registrar_carrito'
]);

Route::get('/carrito/eliminar_articulo', [
    'as' => 'carrito.eliminar_articulo',
    'uses' => 'CarritoController@eliminar_articulo'
]);

Route::get('/carrito/vaciar_carrito', [
    'as' => 'carrito.vaciar_carrito',
    'uses' => 'CarritoController@vaciar_carrito'
]);

Route::get('/carrito/actualizar', [
    'as' => 'carrito.actualizar',
    'uses' => 'CarritoController@actualizar'
]);

Route::get('/carrito/show', [
    'as' => 'carrito.show',
    'uses' => 'CarritoController@show'
]);

Route::get('/carrito/agregar_articulo', [
    'as' => 'carrito.agregar_articulo',
    'uses' => 'CarritoController@agregar_articulo'
]);


?>