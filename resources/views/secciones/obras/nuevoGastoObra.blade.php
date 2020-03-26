@extends('layout.default')

@section('titulo')
Obras | Admin AEPSA Riviera
@stop

@section('css')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/select2.css') }}" />
@stop

@section('contenido')
<div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item active">Drag & Drop File Upload</li>
                    </ul>
                </div>
            </div>
        </div>
    
        <div class="row clearfix">
            
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Nuevo gasto de obra</h2>
                    </div>
                    <div class="body">
                        <div class="mb-3">
                            <label>ID personal - Nombre</label>
                            <select class="form-control show-tick ms select2" name="idPersonal" data-placeholder="Selecciona Id personal - Nombre" required>
                                <option></option>
                                @foreach ($ListadoPersonal as $personal)
                                    <option value="{{$personal->idPersonal}}">{{$personal->idPersonal}} - {{$personal->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <textarea class="form-control" rows="5" cols="30" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Observaciones</label>
                            <textarea class="form-control" rows="5" cols="30" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Monto</label>
                            <textarea class="form-control" rows="5" cols="30" required></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@stop

@section('scripts')
<script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script> <!-- Select2 Js -->
<script src="{{ asset('assets/js/pages/forms/advanced-select2.js') }}"></script>
@endsection