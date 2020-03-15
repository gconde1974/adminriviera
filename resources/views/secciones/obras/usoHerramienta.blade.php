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
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Uso de herramienta</h2>
                </div>
                <div class="body">
                    <form id="basic-form" method="post" novalidate action="#">  
                        <div class="form-group">
                            <label>Nombre de herramienta</label>
                            <input type="text" class="form-control" name="" value="Martillo" disabled>
                        </div>
                        <div class="form-group">
                            <label>Cantidad</label>
                            <input type="email" class="form-control" name="cantidad" required>
                        </div>
                        <div class="form-group">
                            <label>Medida</label>
                            <input type="text" class="form-control" name="media" value="pza" disabled>
                        </div>

                        <!-- responsable -->
                        <div class="">
                            <div class="mb-3">
                                <label>Responsable</label>
                                <select class="form-control show-tick ms select2" data-placeholder="Select">
                                    <option></option>
                                    <option>Juan perez</option>
                                    <option>Guillermo guitierrez</option>
                                    <option>Eduardo molina</option>
                                </select>
                            </div>
                        </div>
                        <!-- fin responsable -->

                        <div class="form-group">
                            <label>Observaciones</label>
                            <input type="text" class="form-control" name="observaciones">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Guardar</button>
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
