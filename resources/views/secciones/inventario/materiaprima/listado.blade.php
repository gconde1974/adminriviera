@extends('layout.default')

@section('titulo')
Inventario - Materia Prima | Admin AEPSA Riviera
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
                    <h2>Detalle General de Materia Prima<small>Basic example without any additional modification classes</small></h2>
                    <br>
                    <a href="{{route('inventario.materiales.nuevo')}}" class="btn btn-primary">Agregar Materia Prima</a>
                </div>
               
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>Proveedor</th>
                                    <th>Nombre producto</th>
                                    <th>Descripcion</th>
                                    <th>Cantidad actual</th>
                                    <th>Medida</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Listado as $item)
                                <tr>
                                    <td>{{$item->proveedor}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->descripcion}}</td>
                                    <td>{{$item->stockActual}}</td>
                                    <td>Kg</td>
                                    <td>
                                        <a href="{{route('inventario.materiales.entrada', $item->idProducto)}}" class="btn btn-info">Entrada</a>
                                        <a href="{{route('inventario.materiales.salida', $item->idProducto)}}" class="btn btn-info">Salida</a>
                                        <a href="{{route('inventario.materiales.devolucion', $item->idProducto)}}" class="btn btn-info">Devolucion</a>
                                        <a href="#" class="btn btn-warning">Detalle</a>
                                    </td>
                                </tr>
                                @endforeach
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
