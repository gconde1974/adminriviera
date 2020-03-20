<!doctype html>
<html lang="es">

<head>
<title>AEPSA Riviera | Cotizaciones</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">

<!-- MAIN CSS -->
 <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"> 

<link rel="stylesheet" href="{{ asset('assets/css/plantillaPdf.css') }}">
</head>
<body class="theme-cyan">

<!-- Overlay For Sidebars -->

<div id="wrapper">
    <div id="main-content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row">
                                <div class="col-lg-1 col-md-2">
                                    <img src="{{ asset('assets/images/aepsa-logo.jpg') }}" alt="AEPSA Riviera"> 
                                </div>
                                <div class="col-lg-6 col-md-8">
                                    <h3 class="alignment">AEPSA Riviera S.A. de C.V.</h3>
                                    <h2>Playa del Carmen</h2>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <h3>Cotización: <strong class="text-primary">#{{$cotizacion->idCotizaciones}}</strong></h3>
                            <h3>Descripcion: <strong class="text-primary">{{$cotizacion->titulo}}</strong></h3>
                            <p><b>Detalle general:</b> {{$cotizacion->descripcionGeneral}}</p>
                            <ul class="nav nav-tabs-new2">
                                <li class="nav-item inlineblock"><a class="nav-link active" data-toggle="tab" href="#details" aria-expanded="true">Detalles</a></li>                                
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                                    <div class="row clearfix">
                                        <div class="col-md-6 col-sm-6">
                                            <address>
                                                <strong>{{$cotizacion->nombre}}</strong><br>
                                                {{$cotizacion->direccion}}<br>
                                                {{$cotizacion->ciudad}}<br>
                                                <abbr title="Phone">T:</abbr> {{$cotizacion->telefono}}<br>
                                                <abbr title="email">E:</abbr> {{$cotizacion->correo}}<br>
                                            </address>
                                        </div>
                                        <div class="col-md-6 col-sm-6 text-right">
                                            <p class="m-b-0"><strong>Id Cliente: </strong> {{$cotizacion->idClientes}}</p>
                                            <p class="m-b-0"><strong>Fecha de elaboración: </strong> {{$cotizacion->fecha}}</p>
                                            <p class="m-b-0"><strong>Vigencia: </strong> {{$cotizacion->vencimiento}}</p>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            {{-- <th>#</th> --}}
                                                            <th>Concepto</th>
                                                            <th>Cantidad</th>
                                                            <th>Unidad</th>
                                                            <th>Precio unitario</th>
                                                            <th>Importe</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($detalle as $key => $item)
                                                        <tr>
                                                            {{-- <td>{{$key}}</td> --}}
                                                            <td>{{$item->descripcion}}</td>
                                                            <td>{{$item->cantidad}}</td>
                                                            <td>mts2</td>
                                                            <td>${{$item->precioUnitario}}</td>
                                                            <td>${{$item->total}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row clearfix">
                                        <div class="col-md-8">
                                            <h5>Forma de pago</h5>
                                            <p>{{$cotizacion->formaPago}}</p>
                                            <h5>Tiempo de entrega</h5>
                                            <p>{{$cotizacion->tiempoEntrega}}</p>
                                            <h5>Observaciones</h5>
                                            <p>{{$cotizacion->observaciones}}</p>
                                            <h5>Garantía</h5>
                                            <p>{{$cotizacion->garantia}}</p>
                                            <h5>Atentamente</h5>
                                            <p>{{$cotizacion->responsable}}</p>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <p class="m-b-0"><b>Sub-total: </b>${{$cotizacion->subtotal}}</p>
                                            <p class="m-b-0"><b>IVA: </b>${{$cotizacion->iva}}</p>
                                            <h3 class="m-b-0 m-t-10">{{$cotizacion->moneda}} ${{$cotizacion->total}}</h3>
                                            <p>Ciento sesenta y tres mil seiscientos pesos 00/100</p>
                                        </div>                                    
                                        {{-- <div class="hidden-print col-md-12 text-right">
                                            <hr>
                                            <button class="btn btn-primary"><i class="icon-printer"></i> Imprimir</button>
                                        </div> --}}
                                    </div>                                    
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Javascript -->
{{-- <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>     --}}
{{-- <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script> --}}

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
</body>
</html>
