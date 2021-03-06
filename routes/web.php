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


//revision-- falta mejorar el pdf, con css simple
Route::get('/pdfCotizacion', function () {
    return view('pdf.pdfCotizacion');
});

/* OBRAS */
//revision
Route::get('/gastosObra', function () {
    return view('secciones.obras.gastosObra');
});
//revision
Route::get('/nuevoGastoObra', function () {
    return view('secciones.obras.nuevoGastoObra');
});

//revision
Route::get('/materiaPrimaObra', function () {
    return view('secciones.obras.materiaPrimaObra');
});
//revision
Route::get('/usoMateriaPrima', function () {
    return view('secciones.obras.usoMateriaPrima');
});
//revision
Route::get('/herramientaObra', function () {
    return view('secciones.obras.herramientaObra');
});
//revision
Route::get('/usoHerramienta', function () {
    return view('secciones.obras.usoHerramienta');
});

/* PERSONAL */

//revision - no hay nada en la vista aún.
Route::get('/datoIndivPersonal', function () {
    return view('secciones.personal.datoIndivPersonal');
});

/* INVENTARIO HERRAMIENTAS */

//revision
Route::get('/devolucionHerramInvent', function () {
    return view('secciones.inventario.herramienta.devolucionHerramInvent');
});
//revision - no tiene nada la vista
Route::get('/listaIndvHerramPrima', function () {
    return view('secciones.inventario.herramienta.listaIndvHerramPrima');
});

/* INVENTARIO MATERIA PRIMA */

//revision
Route::get('/devolucionMateriaInvent', function () {
    return view('secciones.inventario.materiaprima.devolucionMateriaInvent');
});
//revision - no tiene nada la vista
Route::get('/listaIndvMateriaPrima', function () {
    return view('secciones.inventario.materiaprima.listaIndvMateriaPrima');
});

/* GASTOS */
Route::get('/listaGastosGenerales', function () {
    return view('secciones.gastos.listaGastosGenerales');
});


//middleware del rol en controlador si el modulo aplica solo para administrador 'rol.admin', 
//en cada route si algunas funciones estan disponibles para rol operativo 'rol.op', 'rol.admin' para las que no.

//Grupo de rutas para clientes
Route::prefix('clientes')->group(function () {
    Route::get('/', 'clientesController@index')->name('clientes.clientes');
    Route::get('/seguimiento', 'clientesController@seguimiento')->name('clientes.seguimiento');
    Route::get('/nuevo', 'clientesController@create')->name('clientes.nuevo');
    Route::post('/crear', 'clientesController@store')->name('clientes.crear');
    Route::get('/ver/{id}', 'clientesController@show')->name('clientes.ver');
    Route::get('/editar/{id}', 'clientesController@edit')->name('clientes.editar');
    Route::post('/actualizar/{id}', 'clientesController@update')->name('clientes.actualizar');
    Route::get('/seguimiento/{id}', 'clientesController@showSeguimientoCliente')->name('cliente.seguimiento');
    Route::get('/nuevoseguimiento/{id}', 'clientesController@nuevoSeguimiento')->name('cliente.nuevoseguimiento');
    Route::post('/crearseguimiento/{id}', 'clientesController@createSeguimiento')->name('cliente.crearseguimiento');
});

//Grupo de rutas para cotizaciones
Route::prefix('cotizaciones')->group(function () {
    Route::get('/', 'cotizacionesController@index')->name('cotizaciones.cotizaciones')->middleware('rol.op'); 
    Route::get('/cliente/{id}', 'cotizacionesController@cotizacionesCliente')->name('cotizaciones.cliente')->middleware('rol.admin');
    Route::get('/nueva/{id}', 'cotizacionesController@create')->name('cotizaciones.nueva'); 
    Route::post('/crear', 'cotizacionesController@store')->name('cotizaciones.crear');
    Route::get('/ver/{id}', 'cotizacionesController@show')->name('cotizaciones.ver');
});

//Grupo de rutas para obras
Route::prefix('obras')->group(function () {
    Route::get('/', 'obrasController@index')->name('obras.obras');
    Route::get('/nuevo', 'obrasController@create')->name('obras.nuevo');
    Route::post('/crear', 'obrasController@store')->name('obras.crear');
    Route::get('/detalle/{id}', 'obrasController@showDetalle')->name('obras.detalle');
    Route::get('/detalle/nuevo/{id}', 'obrasController@createBitacoraObra')->name('obras.bitacora');
    Route::post('/detalle/guardar', 'obrasController@saveBitacora')->name('obras.bitacora.guardar');
    Route::get('/personal/{id}', 'obrasController@showPersonal')->name('obras.personal');
    Route::get('/asignarpersonal/{id}', 'obrasController@showAsignarPersonal')->name('obras.personal.asignar');
    Route::post('/personal/guardar', 'obrasController@saveAsignarPersonal')->name('obras.personal.guardar');

    Route::get('/gastos/{id}', 'obrasController@showGastos')->name('obras.gastos');
    Route::get('/gastos/nuevo/{id}', 'obrasController@createGastos')->name('obras.gastos.nuevo');
    Route::post('/gastos/guardar', 'gastosController@store')->name('obras.gastos.guardar');

    Route::get('/materiales/{id}', 'obrasController@showMateriales')->name('obras.materiales');
    Route::get('/materiales/uso/{id}', 'obrasController@showMaterialesUso')->name('obras.materiales.uso');
    Route::get('/asignarmateriales/{id}', 'obrasController@showAsignarMateriales')->name('obras.materiales.asignar');

    Route::get('/herramientas/{id}', 'obrasController@showHerramientas')->name('obras.herramientas');
    Route::get('/herramientas/uso/{id}', 'obrasController@showHerramientasUso')->name('obras.herramientas.uso');

    Route::get('/vehiculos/{id}', 'obrasController@showVehiculos')->name('obras.vehiculos');
    Route::get('/editar/{id}', 'obrasController@edit')->name('obras.editar');
    Route::post('/actualizar/{id}', 'obrasController@update')->name('obras.actualizar');
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
    Route::get('/productos/{id}', 'proveedoresController@show')->name('proveedores.productos');
    Route::get('/editar/{id}', 'proveedoresController@edit')->name('proveedores.editar');
    Route::post('/actualizar/{id}', 'proveedoresController@update')->name('proveedores.actualizar');
});

//Grupo de rutas para inventarios
Route::prefix('inventario')->group(function () {
    Route::get('/', 'inventariosController@index')->name('inventario.inventario');
    Route::get('/materiales', 'inventariosController@materiales')->name('inventario.materiales');
    Route::get('/materiales/nuevo', 'inventariosController@createMaterial')->name('inventario.materiales.nuevo');
    Route::get('/materiales/entrada/{id}', 'inventariosController@entradaMaterial')->name('inventario.materiales.entrada');
    Route::get('/materiales/salida/{id}', 'inventariosController@salidaMaterial')->name('inventario.materiales.salida');
    Route::get('/materiales/devolucion/{id}', 'inventariosController@devolucionMaterial')->name('inventario.materiales.devolucion');
    
    Route::post('/productos/guardar', 'inventariosController@storeProducto')->name('inventario.producto.guardar');
    Route::post('/productos/entrada', 'inventariosController@productoEntrada')->name('inventario.producto.entrada');
    Route::post('/productos/salida', 'inventariosController@productoSalida')->name('inventario.producto.salida');
    Route::post('/productos/devolucion', 'inventariosController@productoDevolucion')->name('inventario.producto.devolucion');
    
    Route::get('/herramientas', 'inventariosController@herramientas')->name('inventario.herramientas');
    Route::get('/herramientas/nuevo', 'inventariosController@createHerramientas')->name('inventario.herramientas.nuevo');
    Route::get('/herramientas/entrada/{id}', 'inventariosController@entradaHerramientas')->name('inventario.herramientas.entrada');
    Route::get('/herramientas/salida/{id}', 'inventariosController@salidaHerramientas')->name('inventario.herramientas.salida');
    Route::get('/herramientas/devolucion/{id}', 'inventariosController@devolucionHerramientas')->name('inventario.herramientas.devolucion');
    
});

//Grupo de rutas para gastos
Route::prefix('gastos')->group(function () {
    Route::get('/', 'gastosController@index')->name('gastos.gastos');
    Route::get('/nuevo', 'gastosController@create')->name('gastos.nuevo');
    Route::post('/crear', 'gastosController@store')->name('gastos.crear');
    Route::get('/ver/{id}', 'gastosController@show')->name('gastos.ver');
});

//Grupo de rutas para vehículos
Route::prefix('vehiculos')->group(function () {
    Route::get('/', 'vehiculosController@index')->name('vehiculos.vehiculos');
    Route::get('/nuevo', 'vehiculosController@create')->name('vehiculos.nuevo');
    Route::post('/crear', 'vehiculosController@store')->name('vehiculos.crear');
    Route::get('/ver/{id}', 'vehiculosController@show')->name('vehiculos.ver');
    Route::get('/editar/{id}', 'vehiculosController@edit')->name('vehiculos.editar');
    Route::post('/actualizar/{id}', 'vehiculosController@update')->name('vehiculos.actualizar');
});

Route::prefix('api')->group(function () {
    Route::post('/cities', 'catalogosController@getCities')->name('catalogos.cities');
    Route::get('/insert', 'catalogosController@inserts')->name('catalogos.insert');
    Route::post('/insertcities', 'catalogosController@insertCities')->name('catalogos.insertcities');
    
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
