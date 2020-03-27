<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gastos;

class gastosController extends Controller
{
    protected $Gastos;

    public function __construct(Gastos $gastos){
        $this->middleware('auth');
        $this->Gastos = $gastos;
    }

    public function index()
    {
        $gastos = $this->Gastos->getGastos();
        return view('secciones.gastos.listaGastosGenerales', ['gastos' => $gastos]);
    }

    public function create()
    {
        return view('welcome'); //cambiar vista
    }

    public function store(Request $request)
    {
        $idObra = $request->input('idObra');
        try {
            // dd($request->all());
            $arrayGasto = ['fecha' => date('Y-m-d'),
                        'descripcion' => $request->input('descripcion'),
                        'monto' => $request->input('monto'),
                        'observaciones' => $request->input('observaciones'),
                        'idObras' => $idObra,
                        'idPersonal' => $request->input('idPersonal'),
                    ];
            $nuevoGasto = $this->Gastos->createGasto($arrayGasto);
            return redirect('/obras/gastos/'.$idObra)->with(['status' => 'Gasto creado!', 'context' => 'success']);
        } catch (\Throwable $th) {
            return redirect('/obras/gastos/'.$idObra)->with(['status' => 'Error al crear el gasto!', 'context' => 'error']);
        }
    }

    public function show($id)
    {
        try {
            $gasto = $this->Gastos->getGasto($id);

            if($gasto){
                return view('gastos.ver', ['gasto' => $gasto]); //cambiar vista
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('gastos.gastos');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
