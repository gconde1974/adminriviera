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
                    <a href="#" class="btn btn-info">Detalle de obra</a>
                    <a href="#" class="btn btn-info">Gastos de obra</a>
                    <a href="#" class="btn btn-info">Personal asignado</a>
                    <a href="#" class="btn btn-info">Materia prima</a>
                    <a href="#" class="btn btn-info">Herramientas</a>
                    <a href="#" class="btn btn-info">Vehiculos</a>
                </div>
               
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>Seleccion</th>
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
                                @foreach($obras as $item)
                                <tr>
                                    <td>
                                        <label class="fancy-radio">
                                            <input type="radio" name="selectorObra" value="{{$item->idObras}}" data-target="{{$item->idCotizaciones}}" required="" data-parsley-errors-container="#error-radio" data-parsley-multiple="selectorObra">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>{{$item->idCotizaciones}}</td>
                                    <td>{{$item->idClientes}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->direccion}}</td>
                                    <td>{{$item->telefono}}</td>
                                    <td>{{$item->ciudad}}</td>
                                    <td>{{$item->estado}}</td>
                                    <td>{{$item->descripcionGeneral}}</td>
                                    <td>{{$item->fechaInicioObra}}</td>
                                    <td>{{$item->fechaFinalObra}}</td>
                                    <td>
                                        <a href="#" class="btn btn-outline-danger">Anticipo</a>
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
