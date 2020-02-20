@extends('layout.default')

@section('titulo')
Obras | Admin AEPSA Riviera
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
                    <h2>Listado general de Obras<small>Basic example without any additional modification classes</small></h2>
                    <br>
                    <!-- <a href="#" class="btn btn-primary">Nuevo cliente</a> -->
                </div>
               
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>ID Cotizacion</th>                                        
                                    <th>ID Cliente</th>
                                    <th>Nombre Cliente</th>
                                    <th>Direccion de obra</th>
                                    <th>Telefono</th>
                                    <th>Ciudad</th>
                                    <th>Estado</th>
                                    <th>Descripcion</th>
                                    <th>Fecha Inicio</th>
                                    <th>Fecha Entrega</th>
                                    <th>Alertas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>34</td>
                                    <td>Ing Zarate</td>
                                    <td>Calle 46 nte, El Pedregal</td>
                                    <td>9982916916</td>
                                    <td>Playa del Carmen</td>
                                    <td>Quintana Roo</td>
                                    <td>descripcion general de la cotizacion</td>
                                    <td>2020-02-17</td>
                                    <td>2020-02-27</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger">Anticipo</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="11">
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-info">Seguimiento de obra</a>
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-warning">Cotizaciones</a>
                                        <a href="#" class="btn btn-primary">Edicion</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>34</td>
                                    <td>Ing Zarate</td>
                                    <td>Calle 46 nte, El Pedregal</td>
                                    <td>9982916916</td>
                                    <td>Playa del Carmen</td>
                                    <td>Quintana Roo</td>
                                    <td>descripcion general de la cotizacion</td>
                                    <td>2020-02-17</td>
                                    <td>2020-02-27</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger">Anticipo</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="11">
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-info">Seguimiento de obra</a>
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-warning">Cotizaciones</a>
                                        <a href="#" class="btn btn-primary">Edicion</a>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>34</td>
                                    <td>Ing Zarate</td>
                                    <td>Calle 46 nte, El Pedregal</td>
                                    <td>9982916916</td>
                                    <td>Playa del Carmen</td>
                                    <td>Quintana Roo</td>
                                    <td>descripcion general de la cotizacion</td>
                                    <td>2020-02-17</td>
                                    <td>2020-02-27</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger">Anticipo</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="11">
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-info">Seguimiento de obra</a>
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-warning">Cotizaciones</a>
                                        <a href="#" class="btn btn-primary">Edicion</a>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>34</td>
                                    <td>Ing Zarate</td>
                                    <td>Calle 46 nte, El Pedregal</td>
                                    <td>9982916916</td>
                                    <td>Playa del Carmen</td>
                                    <td>Quintana Roo</td>
                                    <td>descripcion general de la cotizacion</td>
                                    <td>2020-02-17</td>
                                    <td>2020-02-27</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger">Anticipo</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="11">
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-info">Seguimiento de obra</a>
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-info">Detalle de obra</a>
                                        <a href="#" class="btn btn-warning">Cotizaciones</a>
                                        <a href="#" class="btn btn-primary">Edicion</a>
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
