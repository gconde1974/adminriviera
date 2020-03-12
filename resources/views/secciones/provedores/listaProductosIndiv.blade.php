@extends('layout.default-sin')

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
                    <h2>Lista de productos del proveedor<small>Basic example without any additional modification classes</small></h2>
                    <br>
                </div>
               
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Costo</th>
                                    <th>Observaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lijas para esmeril</td>
                                    <td>Lija del n° 7 cirular</td>
                                    <td>250</td>
                                    <td>el paquete consta de 10pzs</td>
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
