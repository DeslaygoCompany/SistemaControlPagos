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

Route::get('/','Auth\LoginController@showLoginForm')->middleware('guest');

/*RUTAS PARA EL LOGEO DE UN USUARIO*/
Route::post('/login','Auth\LoginController@login')->name('login');
Route::post('/logout','Auth\LoginController@logout')->name('logout');
//Auth::routes();

//Rutas para el administrador
Route::get('/main','AppController@mainAdmin')->name('main')->middleware('auth');
Route::get('/deudores','AppController@deudores')->name('deudores')->middleware('auth');
Route::get('/pagos','AppController@pagos')->name('pagos')->middleware('auth');
Route::get('/usuarios','AppController@usuarios')->name('usuarios')->middleware('auth');


Route::get('/deudores/perfil/{deudor}', 'DeudorController@perfil')->name('perfil');

//Rutas para el deudor

Route::get('/informacion-personal','DeudorController@informacion')->name('informacion-personal')->middleware('auth');
Route::post('/eliminar_deudor','DeudorController@eliminar_deudor')->name('eliminar_deudor');
Route::get('/getDeudores','DeudorController@getDeudores');
Route::get('/seleccionarDeudor','DeudorController@seleccionarDeudor');

/*RUTAS PARA GESTIONAR AL DEUDOR*/
Route::post('/agregar_deudor','DeudorController@agregar_deudor')->name('agregar_deudor');
Route::post('/actualizar_deudor','DeudorController@actualizar_deudor')->name('actualizar_deudor');

/*RUTAS PARA EXPORTAR A EXCEL*/
Route::get('/exportarDeudores','DeudorController@exportarDeudores')->name('exportarDeudores')->middleware('auth');
Route::get('/exportarFacturas','FacturasController@exportarFacturas')->name('exportarFacturas')->middleware('auth');


Route::get('/validarUser','UserController@validarUser');

//Rutas para Agregar usuarios
Route::post('/agregarUser','UserController@agregarUser')->name('agregarUser');

/*RUTAS PARA GESTONAR LAS FACTURAS*/
Route::post('/agregar_factura','FacturasController@agregar_factura');
Route::post('/cambiarEstado','FacturasController@cambiarEstado')->name('cambiarEstado');
Route::post('/eliminarFactura','FacturasController@eliminarFactura')->name('eliminarFactura');
Route::post('/modificarFactura','FacturasController@modificarFactura')->name('modificarFactura');

Route::get('/verFactura','FacturasController@verFactura')->name('verFactura')->middleware('auth');
Route::get('/descargarFactura/{factura}','FacturasController@descargarFactura')->middleware('auth');
Route::get('/verFactura/{factura}','FacturasController@verFactura')->middleware('auth');


/*RUTAS PARA EL PERFIL DEL DEUDOR*/
Route::get('/informacion','AppController@informacion')->name('informacion')->middleware('auth');
Route::get('/historial-pagos','DeudorController@historial')->name('historial-pagos')->middleware('auth');


Route::fallback('AppController@notFound');
