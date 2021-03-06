@extends('layout.default')

@section('titulo')
Proveedores | Admin AEPSA Riviera
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
                    <h2>Detalle general de proveedores<small>Basic example without any additional modification classes</small></h2>
                    <br>
                    <a href="{{route('proveedores.nuevo')}}" class="btn btn-primary">Agregar proveedor</a>
                </div>
               
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Direccion</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proveedores as $proveedor)
                                <tr>
                                    <td>{{$proveedor->nombre}}</td>
                                    <td>{{$proveedor->direccion}}</td>
                                    <td>
                                        <a href="{{route('proveedores.productos',$proveedor->idProveedores)}}" class="btn btn-warning">Lista de productos</a>
                                        <a href="{{route('proveedores.editar',$proveedor->idProveedores)}}" class="btn btn-info">Edicion</a>
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
