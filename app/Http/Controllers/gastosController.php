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
        return view('gastos.listado', ['gastos' => $gastos]); //cambiar vista
    }

    public function create()
    {
        return view('welcome'); //cambiar vista
    }

    public function store(Request $request)
    {
        try {
            $arrayGasto = ['fecha' => $request->input('fecha'),
                        'descripcion' => $request->input('descripcion'),
                        'monto' => $request->input('total'),
                        'observaciones' => $request->input('observaciones'),
                        'idObras' => $request->input('idObras'),
                        'idPersonal' => $request->input('idPersonal'),
                    ];
            $nuevoGasto = $this->Gastos->createGasto($arrayGasto);
            return redirect('/gastos')->with('status', 'gasto creado!'); //cambiar vista

            // throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('gastos.gastos');
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
