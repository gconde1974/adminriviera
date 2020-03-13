@extends('layout.default')

@section('titulo')
Inventario - Herramienta | Admin AEPSA Riviera
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
                    <h2>Detalle General de Herramientas<small>Basic example without any additional modification classes</small></h2>
                    <br>
                    <a href="{{route('inventario.herramientas.nuevo')}}" class="btn btn-primary">Agregar Herramientas</a>
                </div>
               
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>Proveedor</th>
                                    <th>Nombre de herramienta</th>
                                    <th>Descripcion</th>
                                    <th>Cantidad actual</th>
                                    <th>Medida</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>asjfhdsaf</td>
                                    <td>martillo</td>
                                    <td>de goma</td>
                                    <td>5</td>
                                    <td>pza</td>
                                    <td>
                                        <a href="#" class="btn btn-info">Entrada</a>
                                        <a href="#" class="btn btn-info">Salida</a>
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
@section('scripts')

@endsection
