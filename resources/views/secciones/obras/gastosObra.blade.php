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
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2>Gasto individual de la Obra<small>Basic example without any additional modification classes</small></h2>
                    <br>
                    <h2>ID cotizacion: {{$obra->idCotizaciones}}</h2>
                    <h2>ID cliente: {{$obra->idClientes}}</h2>
                    <h2>Nombre: {{$obra->nombre}}</h2>
                    <h2>Descripcion: {{$obra->descripcionGeneral}}</h2>
                    <br>
                    <a href="{{ route('obras.detalle', $obra->idObras) }}" class="btn btn-info">Detalle de obra</a>
                    <a href="{{ route('obras.gastos', $obra->idObras) }}" class="btn btn-info">Gastos de obra</a>
                    <a href="{{ route('obras.personal', $obra->idObras) }}" class="btn btn-info">Personal asignado</a>
                    <a href="{{ route('obras.materiales', $obra->idObras) }}" class="btn btn-info">Materia prima</a>
                    <a href="{{ route('obras.herramientas', $obra->idObras) }}" class="btn btn-info">Herramientas</a>
                    <a href="#" class="btn btn-info">Vehiculos</a>
                    <br><br>
                    <a href="{{route('obras.gastos.nuevo',$obra->idObras)}}" class="btn btn-primary">Nuevo gasto de obra</a>
                </div>
               
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Descripcion</th>                                    
                                    <th>Observaciones</th>
                                    <th>Monto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2020-03-24</td>
                                    <td>Se entrego dinero para hielo</td>
                                    <td>Vestibulum nec metus volutpat, convallis felis at, iaculis lorem.</td>
                                    <td>$150</td>
                                </tr>
                                <tr>
                                    <td>2020-03-24</td>
                                    <td>Se entrego dinero para hielo</td>
                                    <td>Vestibulum nec metus volutpat, convallis felis at, iaculis lorem.</td>
                                    <td>$150</td>
                                </tr>
                                <tr>
                                    <td>2020-03-24</td>
                                    <td>Se entrego dinero para hielo</td>
                                    <td>Vestibulum nec metus volutpat, convallis felis at, iaculis lorem.</td>
                                    <td>$150</td>
                                </tr>
                                <tr>
                                    <td>2020-03-24</td>
                                    <td>Se entrego dinero para hielo</td>
                                    <td>Vestibulum nec metus volutpat, convallis felis at, iaculis lorem.</td>
                                    <td>$150</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-right">Total</td>
                                    <td >$180</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
