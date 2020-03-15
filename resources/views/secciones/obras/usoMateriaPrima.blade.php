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
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Uso de material</h2>
                    <br>
                    <h2>ID cotizacion: 5</h2>
                    <h2>ID cliente: 1042</h2>
                    <h2>Nombre: juan perez</h2>
                    <h2>Descripcion: espuma de poliuretano 1" en lamina para una nave</h2>
                </div>
                <div class="body">
                    <form id="basic-form" method="post" novalidate action="#">  
                        <div class="form-group">
                            <label>Nombre material</label>
                            <input type="text" class="form-control" name="" value="ISO 1917" disabled>
                        </div>
                        <div class="form-group">
                            <label>Cantidad</label>
                            <input type="email" class="form-control" name="cantidad" required>
                        </div>
                        <div class="form-group">
                            <label>Medida</label>
                            <input type="text" class="form-control" name="media" value="kg" disabled>
                        </div>
                        <div class="form-group">
                            <label>Observaciones</label>
                            <input type="text" class="form-control" name="observaciones">
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