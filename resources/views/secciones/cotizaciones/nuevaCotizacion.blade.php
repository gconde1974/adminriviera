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
                    <form id="basic-form" method="post" action="{{route('cotizaciones.crear')}}" novalidate>
                        @csrf
                        <input type="hidden" class="form-control" name="idCliente" value="{{$cliente->idClientes}}">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" value="{{$cliente->nombre}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                        <input type="email" class="form-control" value="{{$cliente->correo}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control" value="{{$cliente->telefono}}" disabled>
                        </div>
                        <div class="form-group">
                            <label>Descripcion general</label>
                            <textarea class="form-control" rows="5" cols="30" name="desgeneral" required>Nos permitimos poner a su consideración la siguiente Cotización para el trabajo de Suministro y aplicación de Poliurea Espreada a 2mm de espesor para planta de tratamiento.</textarea>
                        </div>
                        <!-- -->
                        <div class="class detalleCotizacion">
                            <div class="row clearfix concepto">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Concepto</label>
                                        <textarea class="form-control" rows="3" name="concepto[]" required>1) Preparación de superficie con escalificadora para abrir perfil de anclaje y retirar desmoldante utilizado en cimbra</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Cantidad</label>
                                        <textarea class="form-control" rows="3" name="cantidad[]" required>3,001.00</textarea>
                                    </div>        
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Unidad</label>
                                        <textarea class="form-control" rows="3" name="unidad[]" required>mts2</textarea>
                                    </div>        
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>P.U.</label>
                                        <textarea class="form-control" rows="3" name="pu[]" required>3.00</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="ssn" class="control-label">Total</label>
                                        <textarea class="form-control total" rows="3" name="totalConcepto[]" onkeyup="sumar()" required>9003.00</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary addconcepto">Agregar concepto</button>
                        <button type="button" class="btn btn-danger removeConcepto">Eliminar concepto</button>
                        <br>
                        <!-- -->
                        
                        <div class="form-group mt-4">
                            <label>Subtotal</label>
                            <input type="hidden" id="subtotal2" name="subtotal" class="form-control" value="" >
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" id="subtotal" class="form-control" value="" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>IVA</label>
                            <input type="hidden" id="iva2" name="iva" class="form-control" value="">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" id="iva" class="form-control" value="" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Total</label>
                            <input type="hidden" id="totalCot2" name="total" class="form-control" value="">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" id="totalCot" class="form-control" value="0" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Moneda</label>
                            <select class="form-control show-tick ms select2" name="moneda" data-placeholder="Select" required>
                                <option value="MXN">MXN</option>
                                <option value="USD">USD</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Forma de pago</label>
                            <input type="text" class="form-control" name="formaPago" value="60% AL INICIAR 40% AL FINALIZAR">
                        </div>
                        <div class="form-group">
                            <label>Tiempo de entrega</label>
                            <input type="text" class="form-control" name="tiempoEntrega" value="30 días aproximadamente">
                        </div>
                        <div class="form-group">
                            <label>Observaciones</label>
                            <textarea class="form-control" name="observaciones" rows="5" cols="30">Esta cotización puede variar dependiendo de las dimensiones exactas de la obra y de los requerimientos en campo, este trabajo esta cotizado para su realización de dia. Sin otro particular y agradeciendo la atención que a la presente se sirva dar, quedo de usted para cualquier aclaración.
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Garantia</label>
                            <textarea class="form-control" name="garantia" rows="5" cols="30">20 años por escrito</textarea>
                        </div>
                        <div class="form-group">
                            <label>Aprobado por</label>
                            {{-- <input type="text" class="form-control"> --}}
                            <select class="form-control show-tick ms select2" name="responsable" data-placeholder="Select" required>
                                @foreach ($responsables as $item)
                            <option value="{{$item->idResponsablesCotizacion}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Fecha de vencimiento de cotizacion</label>
                            <input type="date" name="vencimiento" class="form-control">
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
    function sumar(){
        var total = 0;	
        $(".total").each(function() {
            if (isNaN(parseFloat($(this).val()))) {
                total += 0;
            } else {
                total += parseFloat($(this).val());
            }
        });
        $('#subtotal').val(total);
        $('#subtotal2').val(total);
        calcularIva(total);
    }

    function calcularIva(total){
        var iva = 0;
        if (isNaN(parseFloat(total))) {
            iva += 0;
        } else {
            iva = parseFloat(total) * 0.16;
        }
        $('#iva').val(iva);
        $('#iva2').val(iva);
        calcularTotal(total,iva);
    }

    function calcularTotal(total,iva){
        var totalC = total + iva;
        $('#totalCot').val(totalC);
        $('#totalCot2').val(totalC);
    }

    $(document).ready(function() {
        $('.removeConcepto').prop('disabled', true);

        $('.addconcepto').click(function(){
            let clonar = $('.concepto').clone();
            clonar = clonar[0];
            $('.detalleCotizacion').append(clonar);
            $('.removeConcepto').prop('disabled', false);
        });

        $('.removeConcepto').click(function(){
            if(document.getElementsByClassName('concepto').length > 1){
                $('.concepto:last').remove();
                if(document.getElementsByClassName('concepto').length == 1){
                    $('.removeConcepto').prop('disabled', true);
                }
            } 
        });

    })
    
</script>
@endsection