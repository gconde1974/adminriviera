@extends('layout.default')

@section('titulo')
Inventario - Materia Prima | Admin AEPSA Riviera
@stop

@section('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/select2.css') }}" />
<style>
    .masmaterial{
        background: #e6e6e6;
        padding: 19px;
        border-radius: 10px;
        margin-bottom: 20px;
    }
</style>
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
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Salida de Materia Prima</h2>
                </div>

                <div class="body">
                    <form id="basic-form" method="post" novalidate action="{{route('inventario.producto.salida')}}">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                {{-- <div class="mb-3">
                                    <label>Cliente</label>
                                    <select class="form-control show-tick ms select2" data-placeholder="Selecciona cliente">
                                        <option></option>
                                        <option>Juan Perez</option>
                                        <option>Ernesto</option>
                                        <option>Rodrigo</option>
                                        <option>Alberto</option>
                                    </select>
                                </div> --}}
                                <div class="mb-3">
                                    <label>Id Obra - Descripcion - Direccion</label>
                                    <select class="form-control show-tick ms select2" name="idObra" data-placeholder="Selecciona Id obra - descripcion - cliente" required>
                                        <option></option>
                                        @foreach ($ListadoObras as $obra)
                                            <option value="{{$obra->idObras}}">{{$obra->idObras}} - {{$obra->descripcionGeneral}} - {{$obra->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="masmaterial">
                                    <div class="mb-3">
                                        <label>Nombre de materia prima</label>
                                        <input type="text" class="form-control" name="nombre" value="{{$material->nombre}}" disabled>
                                        <input type="hidden" name="idProducto" class="form-control" value="{{$material->idProducto}}" >
                                        <input type="hidden" name="stock" class="form-control" value="{{$material->stockActual}}" >
                                        <input type="hidden" name="tipoProducto" class="form-control" value="{{$material->tipoProducto}}" >
                                        <input type="hidden" name="idTipoMovimiento" value="3"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Cantidad</label>
                                        <input type="number" step="0.01" max="{{$material->stockActual}}" class="form-control" name="cantidad" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Medida</label>
                                        <input type="text" class="form-control" name="" value="Kg" disabled>
                                        <input type="hidden" name="idUnidadMedida" class="form-control" value="1" >
                                    </div>
                                    {{-- <div class="form-group">
                                        <label>Observaciones</label>
                                        <input type="text" class="form-control" name="">
                                    </div> --}}
                                </div>
                                <button type="submit" class="btn btn-warning">Agregar material</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
<script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script> <!-- Select2 Js -->
<script src="{{ asset('assets/js/pages/forms/advanced-select2.js') }}"></script>
@endsection