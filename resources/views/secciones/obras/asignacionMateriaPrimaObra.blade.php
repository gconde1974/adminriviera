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
                            <li class="breadcrumb-item">Forms</li>
                            <li class="breadcrumb-item active">Advanced</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Advanced Select2 -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Agregar materia prima a la Obra<small>Basic example without any additional modification classes</small></h2>
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
                                <div class="row clearfix">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="mb-3">
                                            <p>Producto</p>
                                            <select class="form-control show-tick ms select2" data-placeholder="Producto">
                                                <option></option>
                                                <option>RESINA 3147 (") 3220</option>
                                                <option>RESINA 3148 (")</option>
                                                <option>RESINA 3139 (")</option>
                                                <option>RESINA  MEZCLADA</option>
                                                <option>ISO DE POLIUREA (")</option>
                                                <option>RESINA POLIUREA</option>
                                                <option>IMPERFRESH ROJO (k)</option>
                                                <option>IMPERFRESH BLANCO (k)</option>
                                                <option>TAPETE 4MM</option>
                                                <option>TECNOPOL (K) 25 GRIS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <p>Cantidad</p>
                                        <input type="text" class="form-control" required="">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="mb-3">
                                            <p>Unidad</p>
                                            <select class="form-control show-tick ms select2" data-placeholder="Unidad">
                                                <option></option>
                                                <option>KG</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="mb-3">
                                            <p>Movimiento</p>
                                            <select class="form-control show-tick ms search-select" data-placeholder="Movimiento">
                                                <option></option>
                                                <option>Entrada</option>
                                                <option>Devolucion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <a href="#" class="btn btn-primary">Guardar</a>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Select2 -->

            <!-- Input Slider -->
            <div class="row clearfix"> <!-- se soluciona con LA CLASE D-NONE SIN EMBARGO AUN ESTA CARGANDO LAS LINEAS DE CODIGO  -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <div id="nouislider_basic_example"></div> <!-- este renglon es el que causa el problema -->
                                    <div id="nouislider_range_example"></div> <!-- este renglon es el que causa el problema -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
@stop
