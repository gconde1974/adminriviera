<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cotizaciones;

class cotizacionesController extends Controller
{
    protected $Cotizaciones;

    public function __construct(Cotizaciones $cotizaciones)
    {
        $this->Cotizaciones = $cotizaciones;
    }

    public function index()
    {
        $cotizaciones = $this->Cotizaciones->getCotizaciones();
        //getDetalles cot.
        //get archivos
        //get anticipos
        return view('welcome', ['cotizaciones' => $cotizaciones]); //cambiar vista
    }

    public function create()
    {
        $responsables = $this->Cotizaciones->getResponsables();

        return view('welcome', ['responsables' => $responsables]); //cambiar vista
    }

    public function store(Request $request)
    {
        try {
            // dd($request->all());
            $arrayCotizacion = ['descripcionGeneral' => $request->input('descripcion'),
                            'subtotal' => $request->input('subtotal'),
                            'iva' => $request->input('iva'),
                            'total' => $request->input('total'),
                            'moneda' => $request->input('moneda'),
                            'fecha' => date('Y-m-d'),
                            'vencimiento' => $request->input('vence'),
                            'idClientes' => $request->input('idCliente'),
                            'observaciones' => $request->input('observaciones'),
                            'garantia' => $request->input('garantia'),
                            'tiempoEntrega' => $request->input('tiempoentrega'),
                            'formaPago' => $request->input('formapago'),
                            'idResponsableCotizacion' => $request->input('idResponsable'),
                        ];
            $idCotizacion = $this->Cotizaciones->createCotizacion($arrayCotizacion);
            $arrayDetalle = []; //revisar el request para llenar el arreglo.
            $descripcionArray = $request->has('descripciones') ? $request->input('descripciones') : [];
            foreach ($descripcionArray as $key => $value) {
                $arrayDetalle[] = ['descripcion' => $value,
                            'cantidad' => $request->input('cantidad1'),
                            'precioUnitario' => $request->input('pu1'),
                            'total' => $request->input('total1'),
                            'idCotizaciones' => $idCotizacion,
                        ];
            }

            $detalle = $this->Cotizaciones->createDetalleCotizacion($arrayDetalle); //insertDetalles cot.
            //insert archivos?
            //insert anticipos?
        } catch (\Throwable $th) {
            return redirect()->route('cotizaciones.cotizaciones');
        }
    }

    public function show($id)
    {
        try {
            $cotizacion = $this->Cotizaciones->getCotizacion($id);
            $detalleCotizacion = $this->Cotizaciones->getDetalleCotizacion($id);
            $archivosCotizacion = $this->Cotizaciones->getArchivosCotizacion($id);
            $anticiposCotizacion = $this->Cotizaciones->getAnticiposCotizacion($id);

            $arrayCotizacion = ['cotizacion' => $cotizacion, 
                                'detalle' => $detalleCotizacion,
                                'archivos' => $archivosCotizacion,
                                'anticipos' => $anticiposCotizacion
                            ];
            if($cotizacion){
                return view('welcome', $arrayCotizacion); //cambiar vista
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('cotizaciones.cotizaciones');
        }
    }

    public function destroy($id)
    {
        //
    }
}
