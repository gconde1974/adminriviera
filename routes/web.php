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

// // PAGINA EN BLANCO
// Route::get('/blank', function () {
//     return view('blank');
// });

// PAGINA EN FRONT CLIENTES
//revision
// Route::get('/logiin', function () {
//     return view('secciones.login.login');
// });
//ok
// Route::get('/clientesFront', function () {
//     return view('secciones.clientes.listado');
// });
// //ok
// Route::get('/clientesNuevoFront', function () {
//     return view('secciones.clientes.nuevo');
// });
// //ok
// Route::get('/clientesEdicionFront', function () {
//     return view('secciones.clientes.edicion');
// });
// //ok
// Route::get('/clientesSeguimientoFront', function () {
//     return view('secciones.clientes.seguimiento');
// });
// //ok
// Route::get('/clientesSeguimientoIndEdicionFront', function () {
//     return view('secciones.clientes.seguimientoIndEdicion');
// });
//ok
// Route::get('/seguimientoClienteGeneral', function () {
//     return view('secciones.clientes.seguimientoClienteGeneral');
// });
//revision
Route::get('/cotizacionesCompletas', function () {
    return view('secciones.cotizaciones.cotizacionesCompletas');
});
//revision
Route::get('/nuevaCotizacion', function () {
    return view('secciones.cotizaciones.nuevaCotizacion');
});
//revision
Route::get('/listaCotizacionInd', function () {
    return view('secciones.cotizaciones.listaCotizacionInd');
});
//revision
Route::get('/pdfCotizacion', function () {
    return view('pdf.pdfCotizacion');
});
//revision
Route::get('/listadoObras', function () {
    return view('secciones.obras.listadoObras');
});
//revision
Route::get('/detalleObra', function () {
    return view('secciones.obras.detalleObra');
});
//revision
Route::get('/seguimientoObra', function () {
    return view('secciones.obras.seguimientoObra');
});
//revision
Route::get('/gastosObra', function () {
    return view('secciones.obras.gastosObra');
});
//revision
Route::get('/nuevoGastoObra', function () {
    return view('secciones.obras.nuevoGastoObra');
});
//revision
Route::get('/personalObra', function () {
    return view('secciones.obras.personalObra');
});
//revision
Route::get('/asignacionPersonalObra', function () {
    return view('secciones.obras.asignacionPersonalObra');
});


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
    Route::get('/ver/{id}', 'obrasController@show')->name('obras.ver');
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
