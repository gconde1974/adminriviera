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
                    <h2>Detalle individual de la Obra<small>Basic example without any additional modification classes</small></h2>
                    <br>
                    <h2>ID cotizacion: {{$obra->idCotizaciones}}</h2>
                    <h2>ID cliente: {{$obra->idClientes}}</h2>
                    <h2>Nombre: {{$obra->nombre}}</h2>
                    <h2>Descripcion: {{$obra->descripcionGeneral}}</h2>
                    <br>
                    {{-- <a href="#" class="btn btn-info">Detalle de obra</a> --}}
                    <a href="{{ route('obras.gastos', $obra->idObras) }}" class="btn btn-info">Gastos de obra</a>
                    <a href="{{ route('obras.personal', $obra->idObras) }}" class="btn btn-info">Personal asignado</a>
                    <a href="{{ route('obras.materiales', $obra->idObras) }}" class="btn btn-info">Materia prima</a>
                    <a href="#" class="btn btn-info">Herramientas</a>
                    <a href="#" class="btn btn-info">Vehiculos</a>
                    <br><br>
                    <a href="{{ route('obras.bitacora', $obra->idObras) }}" class="btn btn-primary">Nuevo seguimiento de obra</a>
                </div>
               
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Observaciones</th>
                                    <th>Fotos</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bitacora as $item)
                                <tr>
                                    <td>{{$item->fecha}}</td>
                                    <td>{{$item->observaciones}}</td>
                                    <td>
                                        <div class="row clearfix file_manager">
                                            @foreach ($item->archivos as $archivo)
                                            <div class="col-lg-3 col-md-4 col-sm-12">
                                                <div class="card">
                                                    <div class="file">
                                                        <a href="{{ asset('storage/'.$archivo->url) }}" target="_blank">
                                                            {{-- <div class="hover">
                                                                <button type="button" class="btn btn-icon btn-danger">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </div> --}}
                                                            <div class="image">
                                                                <img src="{{ asset('storage/'.$archivo->url) }}" alt="img" class="img-fluid">
                                                            </div>
                                                            <div class="file-name">
                                                                <p class="m-b-5 text-muted">{{$archivo->nombre}}</p>
                                                                <small>-- <span class="date text-muted">{{$archivo->fecha}}</span></small>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
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
