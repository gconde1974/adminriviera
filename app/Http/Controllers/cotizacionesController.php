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

            $arrayCotizacion = ['titulo' => $request->input('titulo'),
                            'descripcionGeneral' => $request->input('desgeneral'),
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
            $arrayDetalle = []; 
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
            //esta seccion guarda el pdf, pero necesita que este bien la vista que lo genera, para guardarse deifinivivamente.
            // $cotizacion = $this->Cotizaciones->getCotizacion($idCotizacion);
            // $detalleCotizacion = $this->Cotizaciones->getDetalleCotizacion($idCotizacion);
            // //guardar pdf al crear cotizacion
            // $arrayCotizacion = ['cotizacion' => $cotizacion, 
            //                     'detalle' => $detalleCotizacion,
            //                 ];
            // $pdf = \PDF::loadView('pdf.cotizacion', $arrayCotizacion);
            // $pdf->save(storage_path('app/public/pdf/').'cotizacion'.$id.'.pdf');
            
            DB::commit();
            return redirect('/cotizaciones')->with(['status' => 'Cotización creada!','context' => 'success']);

            //insert archivos?
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
                $pdf=  \PDF::loadView('pdf.cotizacion', $arrayCotizacion);
                return $pdf->download('cotizacion'.$id.'.pdf');

                // return view('pdf.pdfCotizacion', $arrayCotizacion); //cambiar vista
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            // dd($th);
            return redirect()->route('cotizaciones.cotizaciones');
        }
    }

    public function exportPdf($id)
    {
        try {
            $cotizacion = $this->Cotizaciones->getCotizacion($id);
            $detalleCotizacion = $this->Cotizaciones->getDetalleCotizacion($id);

            $arrayCotizacion = ['cotizacion' => $cotizacion, 
                                'detalle' => $detalleCotizacion,
                            ];
            if($cotizacion){
                $pdf = \PDF::loadView('pdf.cotizacion', $arrayCotizacion);
                return $pdf->download('cotizacion.pdf');
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
