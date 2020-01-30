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
    // Route::get('/', 'cotizacionesController@index')->name('cotizaciones');
    
});

//Grupo de rutas para obras
Route::prefix('obras')->group(function () {
    // Route::get('/', 'obrasController@index')->name('obras');
    
});

//Grupo de rutas para personal
Route::prefix('personal')->group(function () {
    // Route::get('/', 'personalController@index')->name('personal');
    
});

//Grupo de rutas para proveedores
Route::prefix('proveedores')->group(function () {
    // Route::get('/', 'proveedoresController@index')->name('proveedores');
    
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