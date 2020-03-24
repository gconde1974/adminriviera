@extends('layout.default')

@section('titulo')
Obras | Admin AEPSA Riviera
@stop

@section('css')
<!-- multiselect -->
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/multi-select/css/multi-select.css') }}">
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
                    <h2>Asignacion de personal a Obra<small>Basic example without any additional modification classes</small></h2>
                    <br>
                    <h2>ID cotizacion: {{$obra->idCotizaciones}}</h2>
                    <h2>ID cliente: {{$obra->idClientes}}</h2>
                    <h2>Nombre: {{$obra->nombre}}</h2>
                    <h2>Descripcion: {{$obra->descripcionGeneral}}</h2>
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
                    <form action="{{route('obras.personal.guardar')}}" method="post">
                        @csrf
                        <input type="hidden" class="form-control" value="{{$obra->idObras}}" name="idObra">
                        <p><b>Nota:</b> Se muestran solo los que esten con estatus activo</p>
                        <select id="optgroup" class="ms" multiple="multiple" name="personalAsignado[]">
                            {{-- <optgroup label="Personal de playa del carmen"> --}}
                                @foreach ($personal as $item)
                                    <option value="{{$item->idPersonal}}">{{$item->nombre}} - {{$item->puesto}}</option>
                                @endforeach
                            {{-- </optgroup> --}}
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@stop

@section('scripts')
<script src="{{ asset('assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script> <!-- Multi Select Plugin Js -->
<script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
<script>
    $(function() {
        //Multi-select
        $('#optgroup').multiSelect({ selectableOptgroup: true });
    });

</script>
@endsection