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
    return view('welcome');
});

// PAGINA EN BLANCO
Route::get('/blank', function () {
    return view('blank');
});

//Grupo de rutas para clientes
Route::prefix('clientes')->group(function () {
    Route::get('/', 'clientesController@index')->name('clientes.clientes');
    Route::get('/nuevo', 'clientesController@create')->name('clientes.nuevo');
    Route::post('/crear', 'clientesController@store')->name('clientes.crear');
    Route::get('/ver/{id}', 'clientesController@show')->name('clientes.ver');
    Route::get('/editar/{id}', 'clientesController@edit')->name('clientes.editar');
    Route::post('/actualizar/{id}', 'clientesController@update')->name('clientes.actualizar');
    Route::get('/seguimiento/{id}', 'clientesController@showSeguimientoCliente')->name('clientes.seguimiento');
    Route::get('/nuevoseguimiento', 'clientesController@nuevoSeguimiento')->name('clientes.nuevoseguimiento');
    Route::post('/crearseguimiento/{id}', 'clientesController@createSeguimiento')->name('clientes.crearseguimiento');
});

//Grupo de rutas para cotizaciones
Route::prefix('cotizaciones')->group(function () {
    Route::get('/', 'cotizacionesController@index')->name('cotizaciones.cotizaciones');
    Route::get('/nuevo', 'cotizacionesController@create')->name('cotizaciones.nuevo');
    Route::post('/crear', 'cotizacionesController@store')->name('cotizaciones.crear');
    Route::get('/ver/{id}', 'cotizacionesController@show')->name('cotizaciones.ver');
});

//Grupo de rutas para obras
Route::prefix('obras')->group(function () {
    // Route::get('/', 'obrasController@index')->name('obras');
    
});

//Grupo de rutas para personal
Route::prefix('personal')->group(function () {
    Route::get('/', 'personalController@index')->name('personal.personal');
    Route::get('/nuevo', 'personalController@create')->name('personal.nuevo');
    Route::post('/crear', 'personalController@store')->name('personal.crear');
    Route::get('/ver/{id}', 'personalController@show')->name('personal.ver');
    Route::get('/editar/{id}', 'personalController@edit')->name('personal.editar');
    Route::post('/actualizar/{id}', 'personalController@update')->name('personal.actualizar');
});

//Grupo de rutas para proveedores
Route::prefix('proveedores')->group(function () {
    Route::get('/', 'proveedoresController@index')->name('proveedores.proveedores');
    Route::get('/nuevo', 'proveedoresController@create')->name('proveedores.nuevo');
    Route::post('/crear', 'proveedoresController@store')->name('proveedores.crear');
    Route::get('/ver/{id}', 'proveedoresController@show')->name('proveedores.ver');
    Route::get('/editar/{id}', 'proveedoresController@edit')->name('proveedores.editar');
    Route::post('/actualizar/{id}', 'proveedoresController@update')->name('proveedores.actualizar');
});

//Grupo de rutas para inventarios
Route::prefix('inventarios')->group(function () {
    // Route::get('/', 'inventariosController@index')->name('inventarios');
    
});

//Grupo de rutas para gastos
Route::prefix('gastos')->group(function () {
    // Route::get('/', 'gastosController@index')->name('gastos');
    
});

//Grupo de rutas para vehículos
Route::prefix('vehiculos')->group(function () {
    // Route::get('/', 'vehiculosController@index')->name('vehiculos');
    
});