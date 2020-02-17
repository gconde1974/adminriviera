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
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Nueva cotizacion</h2>
                </div>
                <div class="body">
                    <form id="basic-form" method="post" novalidate>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" value="Misael sajaropulos" disabled>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="m.sajaropulos@hotmail.com" disabled>
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control" value="9841355905" disabled>
                        </div>
                        <div class="form-group">
                            <label>Descripcion general</label>
                            <textarea class="form-control" rows="5" cols="30" required></textarea>
                        </div>
                        <!-- -->
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Concepto</label>
                                    <textarea class="form-control" rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Cantidad</label>
                                    <input type="text" class="form-control">
                                </div>        
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>P.U.</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="ssn" class="control-label">SSN</label>
                                    <input type="text" id="ssn" class="form-control">
                                    <span class="help-block">999-99-9999</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="product-key" class="control-label">Product Key</label>
                                    <input type="text" id="product-key" class="form-control">
                                    <span class="help-block">a*-999-a999</span>
                                </div>
                            </div>
                        </div>


                        <!-- -->
                        <div class="form-group">
                            <label>Subtotal</label>
                            <input type="text" class="form-control" value="$12,313" disabled>
                        </div>
                        <div class="form-group">
                            <label>IVA</label>
                            <input type="text" class="form-control" value="$1,893" disabled>
                        </div>
                        <div class="form-group">
                            <label>Total</label>
                            <input type="text" class="form-control" value="$14,206" disabled>
                        </div>
                        <div class="form-group">
                            <label>Moneda</label>
                            <select class="form-control show-tick ms select2" data-placeholder="Select" required>
                                <option></option>
                                <option selected>Pesos</option>
                                <option>Dolares</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Forma de pago</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tiempo de entrega</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Observaciones</label>
                            <textarea class="form-control" rows="5" cols="30"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Garantia</label>
                            <textarea class="form-control" rows="5" cols="30"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Aprobado por</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Fecha de vencimiento de cotizacion</label>
                            <input type="text" class="form-control" value="10/mayo/2020" disabled>
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
