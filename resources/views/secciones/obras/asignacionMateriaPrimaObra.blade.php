@extends('layout.multiselector')

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
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Advanced</strong> Select2 <small>Taken from <a href="http://select2.github.io/select2" target="_blank">select2.github.io/select2</a></small> </h2>
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
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-6">
                                    <div class="mb-3">
                                        <p>Basic</p>
                                        <select class="form-control show-tick ms select2" data-placeholder="Select">
                                            <option></option>
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="mb-3">
                                        <p>With OptGroups</p>
                                        <select class="form-control show-tick ms select2" data-placeholder="Select">
                                            <option></option>
                                            <optgroup label="Picnic">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </optgroup>
                                            <optgroup label="Camping">
                                                <option>Tent</option>
                                                <option>Flashlight</option>
                                                <option>Toilet Paper</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="mb-3">
                                        <p>Multiple Select</p>
                                        <select class="form-control show-tick ms select2" multiple data-placeholder="Select">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="mb-3">
                                        <p>With Clear Button</p>
                                        <select class="form-control show-tick ms search-select" data-placeholder="Select">
                                            <option></option>
                                            <option>Hot Dog, Fries and a Soda</option>
                                            <option>Burger, Shake and a Smile</option>
                                            <option>Sugar, Spice and all things nice</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="mb-3">
                                        <p>Max Selection Limit: 2</p>
                                        <select id="max-select" class="form-control show-tick ms" multiple>
                                            <option></option>
                                            <optgroup label="Condiments" data-max-options="2">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </optgroup>
                                            <optgroup label="Breads" data-max-options="2">
                                                <option>Plain</option>
                                                <option>Steamed</option>
                                                <option>Toasted</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="mb-3">
                                        <p>Loading Data</p>
                                        <input type="hidden" id="loading-select" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="mb-3">
                                        <p>Loading Array Data</p>
                                        <input type="hidden" id="array-select" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="mb-3">
                                        <p>Disabled Option</p>
                                        <select class="form-control show-tick ms select2" data-placeholder="Select">
                                            <option></option>
                                            <option>Mustard</option>
                                            <option disabled>Ketchup</option>
                                            <option>Relish</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2>Lista de personal en Obra<small>Basic example without any additional modification classes</small></h2>
                    <br>
                    <h2>ID cotizacion: 5</h2>
                    <h2>ID cliente: 1042</h2>
                    <h2>Nombre: juan perez</h2>
                    <h2>Descripcion: espuma de poliuretano 1" en lamina para una nave</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another Action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <form action="" method="post">
                        <p><b>Nota:</b> Se muestran solo los que esten con estatus activo</p>
                        <select id="optgroup" class="ms" multiple="multiple">
                            <optgroup label="Personal de playa del carmen">
                                <option value="01">Juan perez(nombre) - aplicador(descripcion)</option>
                                <option value="02">Juanito perez(nombre) - aplicador(descripcion)</option>
                                <option value="03">Juancho perez(nombre) - aplicador(descripcion)</option>
                                <option value="04">Jeronimo perez(nombre) - aplicador(descripcion)</option>
                            </optgroup>
                            <optgroup label="Personal de mexico">
                                <option value="10">Juan perez(nombre) - aplicador(descripcion)</option>
                                <option value="11">Juanito perez(nombre) - aplicador(descripcion)</option>
                                <option value="12">Juancho perez(nombre) - aplicador(descripcion)</option>
                                <option value="13">Jeronimo perez(nombre) - aplicador(descripcion)</option>
                            </optgroup>
                        </select>
                        <br>
                        <a href="#" class="btn btn-primary">Guardar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@stop
