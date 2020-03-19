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
                    <h2>Lista de herramienta de la Obra<small>Basic example without any additional modification classes</small></h2>
                    <br>
                    <h2>ID cotizacion: 5</h2>
                    <h2>ID cliente: 1042</h2>
                    <h2>Nombre: juan perez</h2>
                    <h2>Descripcion: espuma de poliuretano 1" en lamina para una nave</h2>
                    <br>
                    <!-- <a href="#" class="btn btn-primary">Nuevo cliente</a> -->
                    <a href="#" class="btn btn-info">Detalle de obra</a>
                    <a href="#" class="btn btn-info">Gastos de obra</a>
                    <a href="#" class="btn btn-info">Personal asignado</a>
                    <a href="#" class="btn btn-info">Materia prima</a>
                    <a href="#" class="btn btn-info">Herramientas</a>
                    <a href="#" class="btn btn-info">Vehiculos</a>
                    <br><br>
                    <a href="#" class="btn btn-primary">Agregar herramienta a la obra</a>
                </div>
               
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                    <th>Medida</th>
                                    <th>Responsable</th>
                                    <th>Observaciones</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>martillo</td>
                                    <td>1</td>
                                    <td>pza</td>
                                    <td>Joel rodriguez</td>
                                    <td>dfgsr asdd asdfd sdfasdf sdf</td>
                                    <td>
                                        <a href="#" class="btn btn-info">Uso</a>
                                        <a href="#" class="btn btn-info">Devolucion</a>
                                        <a href="#" class="btn btn-warning">Detalle</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>martillo</td>
                                    <td>1</td>
                                    <td>pza</td>
                                    <td>Joel rodriguez</td>
                                    <td>dfgsr asdd asdfd sdfasdf sdf</td>
                                    <td>
                                        <a href="#" class="btn btn-info">Uso</a>
                                        <a href="#" class="btn btn-info">Devolucion</a>
                                        <a href="#" class="btn btn-warning">Detalle</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>martillo</td>
                                    <td>1</td>
                                    <td>pza</td>
                                    <td>Joel rodriguez</td>
                                    <td>dfgsr asdd asdfd sdfasdf sdf</td>
                                    <td>
                                        <a href="#" class="btn btn-info">Uso</a>
                                        <a href="#" class="btn btn-info">Devolucion</a>
                                        <a href="#" class="btn btn-warning">Detalle</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>martillo</td>
                                    <td>1</td>
                                    <td>pza</td>
                                    <td>Joel rodriguez</td>
                                    <td>dfgsr asdd asdfd sdfasdf sdf</td>
                                    <td>
                                        <a href="#" class="btn btn-info">Uso</a>
                                        <a href="#" class="btn btn-info">Devolucion</a>
                                        <a href="#" class="btn btn-warning">Detalle</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>martillo</td>
                                    <td>1</td>
                                    <td>pza</td>
                                    <td>Joel rodriguez</td>
                                    <td>dfgsr asdd asdfd sdfasdf sdf</td>
                                    <td>
                                        <a href="#" class="btn btn-info">Uso</a>
                                        <a href="#" class="btn btn-info">Devolucion</a>
                                        <a href="#" class="btn btn-warning">Detalle</a>
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