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
    
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Agregar Herramienta</h2>
                </div>
                <div class="body">
                    <form id="basic-form" method="post" novalidate action="#">  
                        <div class="form-group">
                            <label>Proveedor</label>
                            <select class="form-control show-tick ms select2" name="" data-placeholder="Select">                                
                                <option value="#">sddsfdfa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nombre de Herramienta</label>
                            <input type="text" class="form-control" name="" required>
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <input type="text" class="form-control" name="" required>
                        </div>
                        <div class="form-group mt-4">
                            <label>Costo unitario</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" id="" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Cantidad</label>
                            <input type="text" class="form-control" name="" required>
                        </div>
                        <div class="form-group">
                            <label>Medida</label>
                            <select class="form-control show-tick ms select2" name="" data-placeholder="Select">
                                <option value="#">kg</option>    
                                <option value="#">pza</option>
                                <option value="#">litro</option>                                
                                <option value="#">galon</option>
                                <option value="#">cubeta</option>
                                <option value="#">barril</option>
                                <option value="#">totem</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Observaciones</label>
                            <input type="text" name="" class="form-control" required>
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