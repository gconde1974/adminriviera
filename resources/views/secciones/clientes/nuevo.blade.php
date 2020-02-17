@extends('layout.default')

@section('titulo')
Clientes | Admin AEPSA Riviera
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
                    <h2>Nuevo cliente</h2>
                </div>
                <div class="body">
                    <form id="basic-form" method="post" novalidate action="{{route('clientes.crear')}}">  
                    @csrf
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control" name="tel" required>
                        </div>
                        <div class="form-group">
                            <label>Dirección</label>
                            <input type="text" class="form-control" name="direccion" placeholder="Calle, No., Col.">
                        </div>
                        <div class="form-group">
                            <label>Direccion</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Estado</label>
                            <select class="form-control show-tick ms select2 states" name="idestado" data-placeholder="Select">
                                @foreach($estados as $estado)
                                <option value="{{$estado->idEstado}}">{{$estado->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ciudad</label>
                            <select class="form-control show-tick ms select2 cities" name="idciudad" data-placeholder="Select">
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <textarea class="form-control" name="descripcion" rows="5" cols="30" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Metros <sup>2</sup></label>
                            <input type="text" name="metrosC" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Medio</label>
                            <select class="form-control show-tick ms select2" name="medio" data-placeholder="Select" required>
                                @foreach($medios as $medio)
                                    <option value="{{$medio->idMedioContacto}}">{{$medio->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>
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
<script>
$(document).ready(function() {
    $('.states').on('change', function(){
        let selected = $('.states :selected').val();
        let html = '';
        $.ajax({
            method: "POST",
            url: "{{route('catalogos.cities')}}",
            data: { id: selected}
        })
        .done(function(data) {
            data.forEach(function(element) {
                html += `<option value="${element.idCiudad}">${element.nombre}</option>`;
            });

            $('.cities').html(html);
        });
    })
});
</script>
@endsection