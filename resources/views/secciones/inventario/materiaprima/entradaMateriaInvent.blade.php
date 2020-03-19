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

    <!-- Advanced Select2 -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2>Entrada de Materia Prima</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <form id="basic-form" method="post" novalidate action="#">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                {{-- <div class="mb-3">
                                    <label>Proveedor</label>
                                    <select class="form-control show-tick ms select2" data-placeholder="Selecciona proveedor">
                                        <option></option>
                                        <option>dfgdsfg</option>
                                        <option>bvnmvbnmbm</option>
                                        <option>wsxedcdec</option>
                                    </select>
                                </div> --}}
                                <div class="mb-3">
                                    <label>Nombre de materia prima</label>
                                    <select class="form-control show-tick ms select2" data-placeholder="Selecciona materia prima">
                                        <option></option>
                                        <option>dfgdsfg</option>
                                        <option>bvnmvbnmbm</option>
                                        <option>wsxedcdec</option>
                                    </select>
                                </div>
                                <input type="hidden" value="" id="idProveedor" name="idProveedor">
                                <div class="form-group">
                                    <label>Cantidad</label>
                                    <input type="text" class="form-control" name="" required>
                                </div>
                                <div class="form-group">
                                    <label>Medida</label>
                                    <input type="text" class="form-control" value="Kg" disabled>
                                    <input type="hidden" class="form-control" value="1" >
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
                    {{-- <br><br>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12">
                            <div id="nouislider_basic_example"></div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div id="nouislider_range_example"></div>
                        </div>
                    </div> --}}
                    <!-- fin, sin esta seccion el selector multiple no funciona -->
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Select2 -->  
    
</div>
@stop

@section('scripts')

@endsection