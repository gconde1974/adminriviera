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
                    <h2>Seguimiento individual del cliente</h2>
                </div>
                <div class="body">
                    <form id="basic-form" method="post" novalidate>
                        <div class="form-group">
                            <label>ID cliente</label>
                            <input type="text" class="form-control" value="1" disabled>
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" value="Misael sajaropulos" disabled>
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <textarea class="form-control" rows="5" cols="30" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Medio</label>
                            <select class="form-control show-tick ms select2" data-placeholder="Select" required>
                                <option></option>
                                <option>Chat</option>
                                <option>Telefono</option>
                                <option>Correo</option>
                                <option>Whatsapp</option>
                                <option>Recomendacion</option>
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

