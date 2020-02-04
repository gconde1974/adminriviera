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
        $this->Personal = $personal;
        $this->Catalogos = $catalogos;
    }

    public function index()
    {
        $ListadoPersonal = $this->Personal->getListadoPersonal();
        return view('welcome', ['personal' => $ListadoPersonal]); //cambiar vista
    }

    public function create()
    {
        $estatus = $this->Catalogos->getStatusPersonal();
        $puestos = $this->Catalogos->getPuestosPersonal();

        return view('welcome', ['estatus' => $estatus, 'puestos' => $puestos]); //cambiar vista
    }

    public function store(Request $request)
    {
        try {
            $arrayPersonal = ['nombre' => $request->input('nombre'),
                        'sueldoDiario' => $request->input('sueldodiario'),
                        'immsDiario' => $request->input('immsdiario'),
                        'status' => $request->input('idStatus'),
                        'idPuestos' => $request->input('idPuesto')
                    ];
            $nuevoPersonal = $this->Personal->createPersonal($arrayPersonal);
            return redirect('/personal')->with('status', 'Personal creado!'); //cambiar vista
        } catch (\Throwable $th) {
            return redirect()->route('personal.personal');
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
                return view('welcome', ['personal' => $personal, 'estatus' => $estatus, 'puestos' => $puestos]); //cambiar vista
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
                        'sueldoDiario' => $request->input('sueldodiario'),
                        'immsDiario' => $request->input('immsdiario'),
                        'status' => $request->input('idStatus'),
                        'idPuestos' => $request->input('idPuesto')
                    ];
            $updatePersonal = $this->Personal->updatePersonal($id, $arrayPersonal);
            return redirect('/personal')->with('status', 'Personal actualizado!'); //cambiar vista
        } catch (\Throwable $th) {
            return redirect()->route('personal.personal');
        }
    }


    public function destroy($id)
    {
        //
    }
}
