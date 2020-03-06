<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        // dd($cotizaciones);
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
            DB::beginTransaction();

            $cantidades = $request->has('cantidad') ? $request->input('cantidad') : [];
            $precios = $request->has('pu') ? $request->input('pu') : [];
            $totales = $request->has('totalConcepto') ? $request->input('totalConcepto') : [];

            $arrayCotizacion = ['descripcionGeneral' => $request->input('desgeneral'),
                            'subtotal' => $request->input('subtotal'),
                            'iva' => $request->input('iva'),
                            'total' => $request->input('total'),
                            'moneda' => $request->input('moneda'),
                            'fecha' => date('Y-m-d'),
                            'vencimiento' => $request->input('vencimiento'),
                            'idClientes' => $request->input('idCliente'),
                            'observaciones' => $request->input('observaciones'),
                            'garantia' => $request->input('garantia'),
                            'tiempoEntrega' => $request->input('tiempoEntrega'),
                            'formaPago' => $request->input('formaPago'),
                            'idResponsableCotizacion' => $request->input('responsable'),
                        ];
            $idCotizacion = $this->Cotizaciones->createCotizacion($arrayCotizacion);
            $arrayDetalle = []; //revisar el request para llenar el arreglo.
            $descripcionArray = $request->has('concepto') ? $request->input('concepto') : [];
            foreach ($descripcionArray as $key => $value) {
                $arrayDetalle[] = ['descripcion' => $value,
                            'cantidad' => $cantidades[$key],
                            'precioUnitario' => $precios[$key],
                            'total' => $totales[$key],
                            'idCotizaciones' => $idCotizacion,
                        ];
            }

            $detalle = $this->Cotizaciones->createDetalleCotizacion($arrayDetalle); //insertDetalles cot.
            DB::commit();
            return redirect('/cotizaciones')->with(['status' => 'Cotización creada!','context' => 'success']);

            //insert archivos?
            //insert anticipos?
        } catch (\Throwable $th) {
            DB::rollBack();
            // dd($th);
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
                // dd($arrayCotizacion);
                // return view('pdf.cotizacion', $arrayCotizacion); //cambiar vista

                $pdf = \PDF::loadView('pdf.pdfCotizacion', $arrayCotizacion);
                return $pdf->download('cotizacion.pdf');
            }

            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            // dd($th);
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
