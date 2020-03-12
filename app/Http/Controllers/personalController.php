<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal;
use App\Catalogos;

class personalController extends Controller
{
    protected $Personal;
    protected $Catalogos;

    public function __construct(Personal $personal, Catalogos $catalogos)
    {
        $this->middleware('auth');
        $this->Personal = $personal;
        $this->Catalogos = $catalogos;
    }

    public function index()
    {
        $ListadoPersonal = $this->Personal->getListadoPersonal();
        return view('secciones.personal.listado', ['listado' => $ListadoPersonal]);
    }

    public function create()
    {
        $estatus = $this->Catalogos->getStatusPersonal();
        $puestos = $this->Catalogos->getPuestosPersonal();

        return view('secciones.personal.nuevo', ['estatus' => $estatus, 'puestos' => $puestos]);
    }

    public function store(Request $request)
    {
        try { 
            $arrayPersonal = ['nombre' => $request->input('nombre'),
                        'sueldoDiario' => $request->input('sueldo'),
                        'imssDiario' => $request->input('imss'),
                        'status' => $request->input('estatus'),
                        'idPuestos' => $request->input('puesto')
                    ];
            $nuevoPersonal = $this->Personal->createPersonal($arrayPersonal);
            return redirect('/personal')->with(['status' => 'Personal creado!','context' => 'success']);
        } catch (\Throwable $th) {
            return redirect('/personal')->with(['status' => 'No se ha creado el personal!','context' => 'error']);
        }
    }

    public function show($id)
    {
        try {
            $personal = $this->Personal->getPersonal($id);
            if($personal){
                return view('welcome', ['personal' => $personal]); //cambiar vista
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('personal.personal');
        }
    }
    
    public function edit($id)
    {
        try {
            $personal = $this->Personal->getPersonal($id);
            $estatus = $this->Catalogos->getStatusPersonal();
            $puestos = $this->Catalogos->getPuestosPersonal();
            
            if($personal){
                return view('secciones.personal.edicion', ['personal' => $personal, 'estatus' => $estatus, 'puestos' => $puestos]);
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('personal.personal');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $arrayPersonal = ['nombre' => $request->input('nombre'),
                        'sueldoDiario' => $request->input('sueldo'),
                        'imssDiario' => $request->input('imss'),
                        'status' => $request->input('estatus'),
                        'idPuestos' => $request->input('puesto')
                    ];
            $updatePersonal = $this->Personal->updatePersonal($id, $arrayPersonal);
            return redirect('/personal')->with(['status' => 'Personal actualizado!','context' => 'success']);
        } catch (\Throwable $th) {
            return redirect('/personal')->with(['status' => 'No se ha actualizado el personal!','context' => 'error']);
        }
    }

}
