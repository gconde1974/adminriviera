<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cotizaciones;
use App\Clientes;

class cotizacionesController extends Controller
{
    protected $Cotizaciones;
    protected $Clientes;

    public function __construct(Cotizaciones $cotizaciones, Clientes $clientes)
    {
        $this->middleware(['auth']);
        $this->Cotizaciones = $cotizaciones;
        $this->Clientes = $clientes;
    }

    public function index()
    {
        $cotizaciones = $this->Cotizaciones->getCotizaciones();
        //getDetalles cot.
        //get archivos
        //get anticipos
        return view('secciones.cotizaciones.listado', ['cotizaciones' => $cotizaciones]);
    }

    public function create($id)
    {
        try {
            $cliente = $this->Clientes->getCliente($id);
            $responsables = $this->Cotizaciones->getResponsables();

            $cotizaciones = $this->Cotizaciones->getCotizacionesCliente($id);
            if($cliente){
                return view('secciones.cotizaciones.nuevaCotizacion', ['cliente' => $cliente, 'responsables' => $responsables]);
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect('/clientes')->with(['status' => 'No se pudo obtener la información','context' => 'error']);
        }

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

    
    public function cotizacionesCliente($id)
    {
        try {
            $cliente = $this->Clientes->getCliente($id);
            $cotizaciones = $this->Cotizaciones->getCotizacionesCliente($id);
            if($cliente){
                return view('secciones.cotizaciones.listadoCliente', ['cotizaciones' => $cotizaciones, 'cliente' => $cliente]);
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect('/cotizaciones')->with(['status' => 'No se pudo obtener la información','context' => 'error']);
        }
    }
}
