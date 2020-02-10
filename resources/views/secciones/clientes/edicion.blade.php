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
                    <h2>Edicion de cliente</h2>
                </div>
                <div class="body">
                    <form id="basic-form" method="post" novalidate action="{{route('clientes.actualizar',$id)}}">  
                        @csrf
                        <div class="form-group">
                            <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="{{$cliente->nombre}}" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{$cliente->correo}}" required>
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control" name="tel" value="{{$cliente->telefono}}" required>
                        </div>
                        <div class="form-group">
                            <label>Dirección</label>
                            <input type="text" class="form-control" name="direccion" value="{{$cliente->direccion}}" placeholder="Calle, No., Col.">
                        </div>
                        <div class="form-group">
                            <label>Estado</label>
                            <select class="form-control show-tick ms select2 states" name="idestado" data-placeholder="Select">
                                @foreach($estados as $estado)
                                <option value="{{$estado->idEstado}}" {{$estado->idEstado == $cliente->idEstado ? 'selected' : ''}} >{{$estado->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ciudad</label>
                            <select class="form-control show-tick ms select2 cities" name="idciudad" data-placeholder="Select">
                                @foreach($ciudades as $ciudad)
                                <option value="{{$ciudad->idCiudad}}" {{$ciudad->idCiudad == $cliente->idCiudad ? 'selected' : ''}} >{{$ciudad->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                        <input type="hidden" name="idSeguimiento" value="{{$seguimiento->idClienteSeguimiento}}">
                            <label>Descripcion</label>
                            <textarea class="form-control" name="descripcion" rows="5" cols="30" required>{{$seguimiento->descripcion}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Metros <sup>2</sup></label>
                            <input type="text" name="metrosC" value="{{$seguimiento->metrosCuadrados}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Medio</label>
                            <select class="form-control show-tick ms select2" name="medio" data-placeholder="Select" required>
                                @foreach($medios as $medio)
                                    <option value="{{$medio->idMedioContacto}}" {{$medio->idMedioContacto == $seguimiento->idMedioContacto ? 'selected' : ''}}>{{$medio->descripcion}}</option>
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
        $('.cities').html(html);
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