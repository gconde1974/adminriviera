@extends('layout.multiselector')

@section('titulo')
Gastos | Admin AEPSA Riviera
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
                                <tr>
                                    <td>David gonzalez</td>
                                    <td>$430</td>
                                    <td>$210</td>
                                    <td>supervisor</td>
                                    <td>Vacaciones</td>
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

    <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Date Picker</h2>
                        </div>
                        <div class="body">
                            <div class="row">

                                <div class="col-lg-6 col-md-12">
                                    <label>Range</label>                                    
                                    <div class="input-daterange input-group" data-provide="datepicker">
                                        <input type="text" class="input-sm form-control" name="start">
                                        <span class="input-group-addon">&nbsp;hasta&nbsp; </span>
                                        <input type="text" class="input-sm form-control" name="end">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

</div>
@stop

@section('scripts')

@endsection