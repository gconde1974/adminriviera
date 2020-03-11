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
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>Detalle general de personal<small>Basic example without any additional modification classes</small></h2>
                    <br>
                    <a href="#" class="btn btn-primary">Agregar personal</a>
                </div>
               
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Sueldo</th>
                                    <th>IMSS</th>
                                    <th>Puesto</th>
                                    <th>Estatus</th>
                                    <th>Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Juan perez</td>
                                    <td>$280</td>
                                    <td>$120</td>
                                    <td>Aplicador</td>
                                    <td>Activo</td>
                                    <td>
                                        <a href="#" class="btn btn-warning">Detalle</a>
                                        <a href="#" class="btn btn-info">Edicion</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('scripts')

@endsection
