<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Obras;
use App\Personal;
use App\Cotizaciones;
use App\Catalogos;

class obrasController extends Controller
{
    protected $Obras;
    protected $Personal;
    protected $Cotizaciones;
    protected $Catalogos;

    public function __construct(Obras $obras, Personal $personal, Cotizaciones $cotizaciones, Catalogos $catalogos)
    {
        $this->middleware('auth');
        $this->Obras = $obras;
        $this->Personal = $personal;
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

            return redirect('/obras')->with(['status' => 'Obra creada!', 'context' => 'success']); 
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('/obras')->with(['status' => 'Error al crear la obra!', 'context' => 'error']);

            return redirect()->route('obras.obras');
        }
    }

    public function showDetalle($id)
    {
        try {
            $obra = $this->Obras->getObra($id);
            $bitacora = $this->getBitacoraObra($id);
            // dd($bitacora);
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
            // dd($personal);
            if($obra){
                return view('secciones.obras.personalObra', ['obra' => $obra, 'personal' => $personal]);
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect('/obras')->with(['status' => 'Error al obtener la información.', 'context' => 'error']);
        }
    }

    public function showAsignarPersonal($id)
    {
        try {
            $obra = $this->Obras->getObra($id);
            $personal = $this->Personal->getListadoPersonalActivo();
            if($obra){
                return view('secciones.obras.asignarPersonal', ['obra' => $obra, 'personal' => $personal]);
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect('/obras/personal/'.$id)->with(['status' => 'Error al obtener la información.', 'context' => 'error']);
        }
    }

    public function saveAsignarPersonal(Request $request)
    {
        $idObra = $request->input('idObra');
        try {
            DB::beginTransaction();
            $arrayPersonalObra = [];
            $personal = $request->input('personalAsignado');

            foreach ($personal as $key => $value) {
                $arrayPersonalObra[] = ['idObras' => $idObra,
                'idPersonal' => $value,
                'fecha' => date('Y-m-d'),
                ];
            }

            $insert = $this->Obras->createObraPersonal($arrayPersonalObra);
            DB::commit();

            return redirect('/obras/personal/'.$idObra)->with(['status' => 'Asignacion de personal creada!', 'context' => 'success']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('/obras/personal/'.$idObra)->with(['status' => 'Error al asignar el personal!', 'context' => 'error']); 
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
        try {
            $obra = $this->Obras->getObra($id);
            $herramientas = $this->getBitacoraObra($id); //cambiar
            if($obra){
                return view('secciones.obras.herramientaObra', ['obra' => $obra, 'herramientas' => $herramientas]);
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('obras.obras');
        }
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
            return redirect('/obras')->with(['status' => 'obra actualizada!', 'context' => 'success']); //cambiar vista
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

            $arrayBitacora = ['fecha' => date('Y-m-d'),
                            'observaciones' => $request->input('observaciones'),
                            'idObras' => $idObra
                            ];

            $idBitacora = $this->Obras->createBitacora($arrayBitacora);

            $arrayBitacoraArchivos = []; 
            $archivosArray = $request->hasFile('files') ? $request->file('files') : [];
            foreach ($archivosArray as $key => $value) {
                $name = 'bit-'.$idObra.$key.$value->getClientOriginalName();
                $path = $value->storeAs(
                     'bitacora', $name, 'public'
                );

                $arrayArchivo = ['nombre' => $value->getClientOriginalName(),
                            'tipo' => $value->extension(),
                            'url' => $path,
                            'fecha' => date('Y-m-d'),
                        ];
                $idArchivo = $this->Catalogos->insertArchivo($arrayArchivo);

                $arrayBitacoraArchivos[] = ['idBitacora' => $idBitacora,
                                            'idArchivos' => $idArchivo,
                                        ];
            }

            $BitacoraArchivos = $this->Obras->createBitacoraArchivos($arrayBitacoraArchivos);
            DB::commit();

            return redirect('/obras/detalle/'.$idObra)->with(['status' => 'Bitacora creada!', 'context' => 'success']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('/obras/detalle/'.$idObra)->with(['status' => 'Error al crear la Bitacora!', 'context' => 'error']); 
        }
    }

    public function getObraPersonal($id)
    {
        $personalObras = $this->Obras->getObraPersonal($id);
        return $personalObras;
    }

    
}
