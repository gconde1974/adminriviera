@extends('layout.default')

@section('titulo')
Cotizaciones | Admin AEPSA Riviera
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
                    <h2>Lista general de cotizaciones <small>Basic example without any additional modification classes</small></h2>
                    <br>
                    <!-- <a href="{{ asset('/clientesSeguimientoIndFront') }}" class="btn btn-primary">Nuevo seguimiento de cliente</a> -->
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>ID cliente</th>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>ID cotizacion</th>
                                    <th>Descripcion</th>
                                    <th>Total</th>
                                    <th>Accion</th>
                                    <th>Alertas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Misael sajaropulos</td>
                                    <td>5-feb-20</td>
                                    <td>34</td>
                                    <td>quisiera usar su productos en la proteccion de una area pequeña de 80M2</td>
                                    <td>$42,620</td>
                                    <td>
                                        <a href="{{ asset('/seguimientoClienteGeneral') }}" class="btn btn-primary">Lista de cotizaciones</a>
                                        <a href="{{ asset('/seguimientoClienteGeneral') }}" class="btn btn-warning">Crear Obra</a>
                                    </td>
                                    <td><a href="#" class="btn btn-outline-danger">Anticipo</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sebastian</td>
                                    <td>5-feb-20</td>
                                    <td>35</td>
                                    <td>quisiera usar su productos en la proteccion de una area pequeña de 80M2</td>
                                    <td>$42,620</td>
                                    <td>
                                        <a href="{{ asset('/seguimientoClienteGeneral') }}" class="btn btn-primary">Lista de cotizaciones</a>
                                        <a href="{{ asset('/seguimientoClienteGeneral') }}" class="btn btn-warning">Crear Obra</a>
                                    </td>
                                    <td><a href="#" class="btn btn-outline-danger">Anticipo</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Bernado Gonzalez</td>
                                    <td>5-feb-20</td>
                                    <td>37</td>
                                    <td>quisiera usar su productos en la proteccion de una area pequeña de 80M2</td>
                                    <td>$42,620</td>
                                    <td>
                                        <a href="{{ asset('/seguimientoClienteGeneral') }}" class="btn btn-primary">Lista de cotizaciones</a>
                                        <a href="{{ asset('/seguimientoClienteGeneral') }}" class="btn btn-warning">Crear Obra</a>
                                    </td>
                                    <td><a href="#" class="btn btn-outline-danger">Anticipo</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Nancy Bahena Delgado</td>
                                    <td>2-feb-20</td>
                                    <td>38</td>
                                    <td>quisiera usar su productos en la proteccion de una area pequeña de 80M2</td>
                                    <td>$42,620</td>
                                    <td>
                                        <a href="{{ asset('/seguimientoClienteGeneral') }}" class="btn btn-primary">Lista de cotizaciones</a>
                                        <a href="{{ asset('/seguimientoClienteGeneral') }}" class="btn btn-warning">Crear Obra</a>
                                    </td>
                                    <td><a href="#" class="btn btn-outline-danger">Anticipo</a></td>
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

