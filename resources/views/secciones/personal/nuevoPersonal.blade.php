@extends('layout.default-sin')

@section('titulo')
Personal | Admin AEPSA Riviera
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
                    <h2>Nuevo personal</h2>
                </div>
                <div class="body">
                    <form id="basic-form" method="post" novalidate action="#">  
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label>Sueldo</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" id="subtotal" class="form-control" name="sueldo" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>IMSS</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" id="subtotal" class="form-control" name="imss" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Puesto</label>
                            <select class="form-control show-tick ms select2 states" name="puesto" data-placeholder="Select">
                                <option value="#">Supervisor</option>
                                <option value="#">Aplicador</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Estatus</label>
                            <select class="form-control show-tick ms select2 states" name="estatus" data-placeholder="Select">
                                <option value="#">Activo</option>
                                <option value="#">Baja</option>
                                <option value="#">Vacaciones</option>
                                <option value="#">Enfermedad</option>
                            </select>
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