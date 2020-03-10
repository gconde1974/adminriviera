<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Obras;
use App\Cotizaciones;
use App\Catalogos;

class obrasController extends Controller
{
    protected $Obras;
    protected $Cotizaciones;
    protected $Catalogos;

    public function __construct(Obras $obras, Cotizaciones $cotizaciones, Catalogos $catalogos)
    {
        $this->middleware('auth');
        $this->Obras = $obras;
        $this->Cotizaciones = $cotizaciones;
        $this->Catalogos = $catalogos;
    }

    public function index()
    {
        $obras = $this->Obras->getObras();
        // dd($obras);
        return view('secciones.obras.listadoObras', ['obras' => $obras]);
    }

    public function create() // se crea la obra desde el boton crear obra en cotizaciones
    {
        $paises = $this->Catalogos->getPaises();
        $idPais = 1; //México
        $estados = $this->Catalogos->getEstadosByPais($idPais);

        return view('welcome', ['estados' => $estados]); //cambiar vista
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $idCotizacion = $request->input('idCotizacion');
            // $arrayObra = ['fechaInicioObra' => $request->input('fechaInicio'),
            //             'fechaFinalObra' => $request->input('fechaFinal'),
            //             'direccion' => $request->input('direccion'),
            //             'idCiudad' => $request->input('idciudad'),
            //             'idEstado' => $request->input('idestado'),
            //             'referencia' => $request->input('ref')
            //         ];
            $arrayObra = ['fechaInicioObra' => date('Y-m-d')];

            $idObra = $this->Obras->createObra($arrayObra);

            $update = $this->Cotizaciones->updateObraCotizacion($idCotizacion, $idObra);
            DB::commit();

            return redirect('/obras')->with('status', 'Obra creada!'); //cambiar vista
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->route('obras.obras');
        }
    }

    public function showDetalle($id)
    {
        try {
            $obra = $this->Obras->getObra($id);
            // dd($obra);
            $bitacora = $this->getBitacoraObra($id);
            if($obra){
                return view('secciones.obras.detalleObra', ['obra' => $obra, 'bitacora' => $bitacora]);
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('obras.obras');
        }
    }

    public function showPersonal($id)
    {
        try {
            $obra = $this->Obras->getObra($id);
            $personal = $this->getObraPersonal($id);
            if($obra){
                return view('secciones.obras.personalObra', ['obra' => $obra, 'personal' => $personal]);
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('obras.obras');
        }
    }

    public function showGastos($id)
    {
        try {
            $obra = $this->Obras->getObra($id);
            $gastos = $this->getBitacoraObra($id);
            if($obra){
                return view('secciones.obras.gastosObra', ['obra' => $obra, 'gastos' => $gastos]);
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('obras.obras');
        }
    }

    public function showMateriales($id)
    {
        try {
            $obra = $this->Obras->getObra($id);
            $materiales = $this->getBitacoraObra($id); //cambiar
            if($obra){
                return view('secciones.obras.materiaPrimaObra', ['obra' => $obra, 'materiales' => $materiales]);
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('obras.obras');
        }
    }

    public function showHerramientas($id)
    {
    }

    public function showVehiculos($id)
    {
    }
    
    public function edit($id)
    {
        try {
            $obra = $this->Obras->getObra($id);
            $paises = $this->Catalogos->getPaises();
            $idPais = 1; //México
            $estados = $this->Catalogos->getEstadosByPais($idPais);
            $ciudades = $this->Catalogos->getCiudadesByEstado($obra->idEstado);

            if($obra){
                return view('secciones.obras.ver', ['obra' => $obra]);
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('obras.obras');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $arrayObra = ['fechaInicioObra' => $request->input('fechaInicio'),
                        'fechaFinalObra' => $request->input('fechaFinal'),
                        'direccion' => $request->input('direccion'),
                        'idCiudad' => $request->input('idciudad'),
                        'idEstado' => $request->input('idestado'),
                        'referencia' => $request->input('ref')
                    ];

            $updateObra = $this->Obras->updateObra($id, $arrayObra);
            return redirect('/obras')->with('status', 'obra actualizada!'); //cambiar vista
        } catch (\Throwable $th) {
            return redirect()->route('obras.obras');
        }
    }

    public function getBitacoraObra($id)
    {
        $bitacora = $this->Obras->getBitacoraObra($id);
        return $bitacora;
    }

    public function createBitacoraObra($id)
    {
        // $bitacora = $this->Obras->getBitacoraObra($id);
        return view('secciones.obras.seguimientoObra', ['id' => $id]);
    }

    public function saveBitacora(Request $request)
    {
        $idObra = $request->input('idObra');
        try {
            DB::beginTransaction();
            dd($request->all());

            $arrayBitacora = ['fecha' => date('Y-m-d'),
                            'observaciones' => $request->input('observaciones'),
                            'idObras' => $idObra
                            ];

            // $idBitacora = $this->Obras->createBitacora($arrayBitacora);

            $arrayBitacoraArchivos = []; 
            $archivosArray = $request->hasFile('files') ? $request->file('files') : [];//revisar el request para llenar el arreglo.
            foreach ($archivosArray as $key => $value) {
                
                $arrayArchivo = ['nombre' => '',
                            'tipo' => '',
                            'url' => $value->getPathName(),
                            'fecha' => date('Y-m-d'),
                        ];
                        dd($arrayArchivo);
                // $idArchivo = $this->Catalogos->insertArchivo($arrayArchivo);

                $arrayBitacoraArchivos[] = ['idBitacora' => $idBitacora,
                                            'idArchivos' => $idArchivo,
                                        ];
            }

            $BitacoraArchivos = $this->Obras->createBitacoraArchivos($arrayBitacoraArchivos);
            DB::commit();

            return redirect('/obras')->with('status', 'Obra creada!'); //cambiar vista
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th);
            return redirect()->route('obras.detalle', $idObra);
        }
    }

    public function getObraPersonal($id)
    {
        $bitacora = $this->Obras->getObraPersonal($id);
        return $bitacora;
    }

    
}
