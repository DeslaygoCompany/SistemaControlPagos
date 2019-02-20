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
    return view('login');
});

//Rutas para el administrador
Route::get('/main','AppController@mainAdmin')->name('main');
Route::get('/deudores','AppController@deudores')->name('deudores');
Route::get('/pagos','AppController@pagos')->name('pagos');
Route::get('/usuarios','AppController@usuarios')->name('usuarios');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/perfil', 'DeudorController@perfil')->name('perfil');

//Rutas para el deudor
Route::get('/main-deudor','AppController@mainDeudo')->name('main-deudor');
Route::get('/historial-pagos','DeudorController@historial')->name('historial-pagos');
Route::get('/informacion-personal','DeudorController@informacion')->name('informacion-personal');

/*RUTAS PARA GESTIONAR AL DEUDOR*/
Route::post('/agregar_deudor','DeudorController@agregar_deudor')->name('agregar_deudor');

/*RUTAS PARA EXPORTAR A EXCEL*/
Route::get('/exportarDeudores','DeudorController@exportarDeudores')->name('exportarDeudores');
