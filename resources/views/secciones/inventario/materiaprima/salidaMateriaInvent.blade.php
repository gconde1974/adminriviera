@extends('layout.multiselector')

@section('titulo')
Inventario - Materia Prima | Admin AEPSA Riviera
@stop

@section('css')
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
                    <form id="basic-form" method="post" novalidate action="#">
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label>Cliente</label>
                                    <select class="form-control show-tick ms select2" data-placeholder="Selecciona cliente">
                                        <option></option>
                                        <option>Juan Perez</option>
                                        <option>Ernesto</option>
                                        <option>Rodrigo</option>
                                        <option>Alberto</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Id Obra - Descripcion - Direccion</label>
                                    <select class="form-control show-tick ms select2" data-placeholder="Selecciona ID obra - Descripcion - direccion">
                                        <option></option>
                                        <option>4 - Espuma de poliuretano - av central cancun</option>
                                        <option>6 - Poliurea - av central cancun</option>
                                        <option>8 - Cementicio - av central cancun</option>
                                        <option>15 - Intumescente - av central cancun</option>
                                    </select>
                                </div>
                                <div class="masmaterial">
                                    <div class="mb-3">
                                        <label>Nombre de materia prima</label>
                                        <select class="form-control show-tick ms select2" data-placeholder="Selecciona materia prima">
                                            <option></option>
                                            <option>dfgdsfg</option>
                                            <option>bvnmvbnmbm</option>
                                            <option>wsxedcdec</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Cantidad</label>
                                        <input type="text" class="form-control" name="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Medida</label>
                                        <input type="text" class="form-control" name="" value="Kg" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Observaciones</label>
                                        <input type="text" class="form-control" name="">
                                    </div>
                                    <br>
                                </div>
                                <button type="submit" class="btn btn-warning">Agregar material</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                    <!-- sin esta seccion el selector multiple no funciona -->
                    <br><br>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12">
                            <div id="nouislider_basic_example"></div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div id="nouislider_range_example"></div>
                        </div>
                    </div>
                    <!-- fin, sin esta seccion el selector multiple no funciona -->
                </div>
                
            </div>
        </div>
    </div>
    
</div>
@stop

@section('scripts')

@endsection