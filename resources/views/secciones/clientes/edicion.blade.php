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
                    <form id="basic-form" method="post" novalidate>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" value="Misael sajaropulos" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="m.sajaropulos@hotmail.com" required>
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control" value="9841355905" required>
                        </div>
                        <div class="form-group">
                            <label>Estado</label>
                            <select class="form-control show-tick ms select2" data-placeholder="Select" required>
                                <option></option>
                                <option selected>Quintana Roo</option>
                                <option>Yucatan</option>
                                <option>Campeche</option>
                                <option>Tabasco</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ciudad</label>
                            <select class="form-control show-tick ms select2" data-placeholder="Select" required>
                                <option></option>
                                <option selected>Playa del carmen</option>
                                <option>Cancun</option>
                                <option>Tulum</option>
                                <option>Chetumal</option>
                                <option>Merida</option>
                                <option>Cd del Carmen</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Descripcion</label>
                            <textarea class="form-control" rows="5" cols="30" required>quisiera usar su productos en la proteccion de una area pequeña de 80M2 aprox para una casa en area rural</textarea>
                        </div>
                        <div class="form-group">
                            <label>Metros <sup>2</sup></label>
                            <input type="text" class="form-control" value="180">
                        </div>
                        <div class="form-group">
                            <label>Medio</label>
                            <select class="form-control show-tick ms select2" data-placeholder="Select" value="chat" required>
                                <option></option>
                                <option>Chat</option>
                                <option selected>Telefono</option>
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

