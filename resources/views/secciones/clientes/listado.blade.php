@extends('layout.default')

@section('titulo')
Clientes | Admin AEPSA Riviera
@stop

@section('contenido')
<div class="container-fluid">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-8 col-sm-12">                        
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Page Blank</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>Listado general de clientes <small>Basic example without any additional modification classes</small></h2>
                    <br>
                    <a href="{{ asset('/clientesNuevoFront') }}" class="btn btn-primary">Nuevo cliente</a>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>ID Cliente</th>
                                    <th>Fecha</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Ciudad</th>
                                    <th>Estado</th>
                                    <th>Descripcion</th>
                                    <th>mts2</th>
                                    <th>Medio</th>
                                    <th>Accion</th>
                                    <th>Alertas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>5-feb-20</td>
                                    <td>Misael sajaropulos</td>
                                    <td>m.sajaropulos@hotmail.com</td>
                                    <td>9841355905</td>
                                    <td>Playa del carmen</td>
                                    <td>Quintana Roo</td>
                                    <td>quisiera usar su productos en la proteccion de una area pequeña de 80M2 aprox para una casa en area rural</td>
                                    <td>1800</td>
                                    <td>Chat</td>
                                    <td>
                                        <a href="{{ asset('/clientesSeguimientoIndEdicionFront') }}" class="btn btn-info">Seguimiento</a>
                                        <a href="{{ asset('/cotizacionIndFront') }}" class="btn btn-warning">Cotizaciones</a>
                                        <a href="{{ asset('/clientesEdicionFront') }}" class="btn btn-primary">Edicion</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger">Anticipo</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>5-feb-20</td>
                                    <td>Misael sajaropulos</td>
                                    <td>m.sajaropulos@hotmail.com</td>
                                    <td>9841355905</td>
                                    <td>Playa del carmen</td>
                                    <td>Quintana Roo</td>
                                    <td>quisiera usar su productos en la proteccion de una area pequeña de 80M2 aprox para una casa en area rural</td>
                                    <td>1800</td>
                                    <td>Chat</td>
                                    <td>
                                        <a href="{{ asset('/clientesSeguimientoIndEdicionFront') }}" class="btn btn-info">Seguimiento</a>
                                        <a href="{{ asset('/cotizacionIndFront') }}" class="btn btn-warning">Cotizaciones</a>
                                        <a href="{{ asset('/clientesEdicionFront') }}" class="btn btn-primary">Edicion</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger">Anticipo</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>5-feb-20</td>
                                    <td>Misael sajaropulos</td>
                                    <td>m.sajaropulos@hotmail.com</td>
                                    <td>9841355905</td>
                                    <td>Playa del carmen</td>
                                    <td>Quintana Roo</td>
                                    <td>quisiera usar su productos en la proteccion de una area pequeña de 80M2 aprox para una casa en area rural</td>
                                    <td>1800</td>
                                    <td>Chat</td>
                                    <td>
                                        <a href="{{ asset('/clientesSeguimientoIndEdicionFront') }}" class="btn btn-info">Seguimiento</a>
                                        <a href="{{ asset('/cotizacionIndFront') }}" class="btn btn-warning">Cotizaciones</a>
                                        <a href="{{ asset('/clientesEdicionFront') }}" class="btn btn-primary">Edicion</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger">Anticipo</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    
</div>
@stop

