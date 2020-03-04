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

    public function create()
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

            // dd($request->all());
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
            dd($th);
            return redirect()->route('obras.obras');
        }
    }

    public function show($id)
    {
        try {
            $obra = $this->Obras->getObra($id);
            if($obra){
                return view('secciones.obras.ver', ['obra' => $obra]);
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('obras.obras');
        }
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

    public function getObraPersonal($id)
    {
        $bitacora = $this->Obras->getObraPersonal($id);
        return $bitacora;
    }

    public function destroy($id)
    {
        //
    }
}
