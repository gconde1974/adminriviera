@extends('layout.default')

@section('titulo')
Obras | Admin AEPSA Riviera
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('assets/vendor/dropify/css/dropify.min.css') }}">

@endsection

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
                        <h2>Nuevo seguimiento de obra</h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" method="post" novalidate enctype="multipart/form-data" action="{{route('obras.bitacora.guardar')}}">  
                            @csrf
                            <input type="hidden" class="form-control" value="{{$id}}" name="idObra">
                            <div class="form-group">
                                <label>Observaciones</label>
                                <textarea class="form-control" rows="5" cols="30" name="observaciones" required></textarea>
                                </div>
                            <label>Subir fotos</label>
                            <input type="file" class="dropify" name="files[]" multiple/>
                            <br>
                            {{-- <a href="#" class="btn btn-warning">Agregar más fotos</a> --}}
                            <br><br>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('scripts')
<script src="{{ asset('assets/vendor/dropify/js/dropify.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/dropify.js')}}"></script>
@endsection