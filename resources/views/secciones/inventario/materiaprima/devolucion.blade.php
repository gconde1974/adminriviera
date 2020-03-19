@extends('layout.multiselector')

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
                    <h2>Devolucion de Materia Prima</h2>
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
                                    <select class="form-control show-tick ms select2" data-placeholder="Selecciona Id obra - descripcion - direccion">
                                        <option></option>
                                        <option>4 - Espuma de poliuretano - av central cancun</option>
                                        <option>6 - Poliurea - av central cancun</option>
                                        <option>8 - Cementicio - av central cancun</option>
                                        <option>15 - Intumescente - av central cancun</option>
                                    </select>
                                </div>
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
                                    <label>Costo unitario</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" id="" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Observaciones</label>
                                    <input type="text" class="form-control" name="">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                    <!-- sin esta seccion el selector multiple no funciona -->
                    <br><br>
                    <div class="row clearfix" style="display:none">
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