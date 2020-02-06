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
                    <h2>Lista individual de seguimientos <small>Basic example without any additional modification classes</small></h2>
                    <br>
                    <h2>ID: 1</h2>
                    <h2>Nombre: Misael sajaropulos</h2>
                    <br>
                    <a href="{{ asset('/clientesSeguimientoIndEdicionFront') }}" class="btn btn-info">Nuevo seguimiento cliente</a>
                    <a href="{{ asset('/cotizacionIndFront') }}" class="btn btn-warning">Cotizacion</a>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Descripcion</th>
                                    <th>Medio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>5-feb-20</td>
                                    <td>se hablo por telefono pero no se localizo</td>
                                    <td>telefono</td>
                                </tr>
                                <tr>
                                    <td>5-feb-20</td>
                                    <td>se le envio cotizacion de poliuretano</td>
                                    <td>correo</td>
                                </tr>
                                <tr>
                                    <td>5-feb-20</td>
                                    <td>se hablo con el cliente y se agendo una visita</td>
                                    <td>telefono</td>
                                </tr>
                                <tr>
                                    <td>2-feb-20</td>
                                    <td>se hizo inspeccion del area y se encontraron los siguientes puntos.</td>
                                    <td>visita</td>
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

