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

    <!-- Advanced Select2 -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2>Entrada de Herramienta</h2>
                </div>
                <div class="body">
                    <form id="basic-form" method="post" novalidate action="{{route('inventario.producto.entrada')}}">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Proveedor</label>
                                    <input type="text" class="form-control" value="{{$herramienta->proveedor}}" disabled>
                                    <input type="hidden" value="{{$herramienta->idProveedor}}" id="idProveedor" name="idProveedor">
                                    <input type="hidden" name="idTipoMovimiento" value="1"/>
                                </div>
                                <div class="form-group">
                                    <label>Nombre de materia prima</label>
                                    <input type="text" class="form-control" value="{{$herramienta->nombre}}" disabled>
                                    <input type="hidden" name="idProducto" class="form-control" value="{{$herramienta->idProducto}}" >
                                    <input type="hidden" name="stock" class="form-control" value="{{$herramienta->stockActual}}" >
                                    <input type="hidden" name="tipoProducto" class="form-control" value="{{$herramienta->tipoProducto}}" >
                                </div>
                                <div class="form-group">
                                    <label>Cantidad</label>
                                    <input type="number" class="form-control" min="1" name="cantidad" required>
                                </div>
                                <div class="form-group">
                                    <label>Medida</label>
                                    <input type="text" class="form-control" value="Pza" disabled>
                                    <input type="hidden" name="idUnidadMedida" class="form-control" value="2" >
                                </div>
                                <div class="form-group">
                                    <label>Costo unitario</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="number" class="form-control" step="0.01" name="costoUnitario" value="">
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label>Observaciones</label>
                                    <input type="text" class="form-control" name="observaciones">
                                </div> --}}
                                <br>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Select2 -->  
    
</div>
@stop

@section('scripts')

@endsection