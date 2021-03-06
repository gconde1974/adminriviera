@extends('layout.default')

@section('titulo')
Cotizaciones | Admin AEPSA Riviera
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
                    <h2>Lista general de cotizaciones <small>Basic example without any additional modification classes</small></h2>
                    <br>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                            <thead>
                                <tr>
                                    <th>ID cliente</th>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>ID cotizacion</th>
                                    <th>Descripcion</th>
                                    <th>Total</th>
                                    <th>Accion</th>
                                    <th>Alertas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cotizaciones as $item)
                                <tr>
                                    <td>{{$item->idClientes}}</td>
                                    <td>{{$item->cliente}}</td>
                                    <td>{{$item->fecha}}</td>
                                    <td>{{$item->idCotizaciones}}</td>
                                    <td>{{$item->descripcionGeneral}}</td>
                                    <td>${{$item->total}}</td>
                                    <td>
                                        <a href="{{ route('cotizaciones.cliente', $item->idClientes) }}" class="btn btn-primary">Lista de cotizaciones</a>
                                        @if($item->idObras == null)
                                        <a href="javascript:void(0)" data-target="{{$item->idCotizaciones}}" class="btn btn-warning saveObra">Crear Obra</a>
                                        @endif
                                    </td>
                                    <td><a href="javascript:void(0)" class="btn btn-outline-danger">Anticipo</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form id="obras-form" action="{{ route('obras.crear') }}" method="POST" style="display: none;">
        @csrf
        <input type="hidden" name="idCotizacion" id="idCotizacion" value="">
    </form>
</div>
@stop

@section('scripts')
<script>
    $(document).ready(function(){
        $('.saveObra').on('click', function(){
            $('#idCotizacion').val($(this).data('target'));
            document.getElementById("obras-form").submit();
        })
    });
</script>
@endsection