@extends('layout.default')

@section('titulo')
Cotizaciones | Admin AEPSA Riviera
@stop

@section('contenido')
<div class="container-fluid file_manager">
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
                    <h2>Lista individual de cotizaciones <small>Basic example without any additional modification classes</small></h2>
                    <br>
                    <h2>ID Cliente: {{$cliente->idClientes}}</h2>
                    <h2>Nombre: {{$cliente->nombre}}</h2>
                    <br>
                    <a href="{{ route('cotizaciones.nueva', $cliente->idClientes) }}" class="btn btn-primary">Nueva cotizacion</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row clearfix">
        @foreach ($cotizaciones as $item)
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card">
                <div class="file">
                    <a href="{{route('cotizaciones.ver',$item->idCotizaciones)}}">
                        <div class="hover">
                            {{-- <button type="button" class="btn btn-icon btn-danger">
                                <i class="fa fa-trash"></i>
                            </button> --}}
                        </div>
                        <div class="icon">
                            <i class="fa fa-file text-success"></i>
                        </div>
                        <div class="file-name">
                            <p class="m-b-5 text-muted">{{$item->idCotizaciones}}.pdf</p>
                            <small>Size: 3MB <span class="date text-muted">{{$item->fecha}}</span></small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@stop
