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
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Agregar Materia Prima</h2>
                </div>
                <div class="body">
                    <form id="basic-form" method="post" novalidate action="{{route('inventario.producto.guardar')}}"> 
                        @csrf 
                        <input type="hidden" name="idTipoMovimiento" value="1"/>
                        <input type="hidden" name="tipoProducto" value="1"/>
                        <div class="form-group">
                            <label>Proveedor</label>
                            <select class="form-control show-tick ms select2" name="idProveedor" data-placeholder="Select">                                
                                @foreach ($proveedores as $proveedor)
                                    <option value="{{$proveedor->idProveedores}}">{{$proveedor->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nombre de materia prima</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <input type="text" class="form-control" name="descripcion" required>
                        </div>
                        <div class="form-group mt-4">
                            <label>Costo unitario</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="number" id="" class="form-control" name="costoUnitario">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Stock inicial</label>
                            <input type="text" class="form-control" name="stockinicial" required>
                        </div>
                        <div class="form-group">
                            <label>Medida</label>
                            <select class="form-control show-tick ms select2" name="idUnidadMedida" data-placeholder="Select">
                                <option value="1">kg</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Observaciones</label>
                            <input type="text" name="observaciones" class="form-control" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
@stop

@section('scripts')

@endsection