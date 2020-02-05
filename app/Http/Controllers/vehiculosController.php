<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculos;

class vehiculosController extends Controller
{
    protected $Vehiculos;

    public function __construct(Vehiculos $vehiculos){
        $this->Vehiculos = $vehiculos;
    }
    
    public function index()
    {
        $vehiculos = $this->Vehiculos->getVehiculos();
        return view('welcome', ['vehiculos' => $vehiculos]); //cambiar vista
    }

    public function create()
    {
        return view('welcome'); //cambiar vista
    }

    public function store(Request $request)
    {
        try {
            $arrayVehiculo = ['marca' => $request->input('marca'),
                            'modelo' => $request->input('modelo'),
                            'anio' => $request->input('año'),
                            'color' => $request->input('color'),
                            'placas' => $request->input('placas'),
                            'observaciones' => $request->input('observaciones'),
                            'kmParaServicio' => $request->input('kmservicio'),
                        ];

            $idVehiculo = $this->Vehiculos->createVehiculo($arrayVehiculo);
            return redirect('/vehiculos')->with('status', 'vehículo creado!'); //cambiar vista
        } catch (\Throwable $th) {
            return redirect()->route('vehiculos.vehiculos');
        }
    }

    public function show($id)
    {
        try {
            $vehiculo = $this->Vehiculos->getVehiculo($id);
            
            if($vehiculo){
                return view('welcome',['vehiculo' => $vehiculo]); //cambiar vista
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('vehiculos.vehiculos');
        }
    }

    public function edit($id)
    {
        try {
            $vehiculo = $this->Vehiculos->getVehiculo($id);
            
            if($vehiculo){
                return view('welcome',['vehiculo' => $vehiculo]); //cambiar vista
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('vehiculos.vehiculos');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $arrayVehiculo = ['marca' => $request->input('marca'),
                            'modelo' => $request->input('modelo'),
                            'anio' => $request->input('año'),
                            'color' => $request->input('color'),
                            'placas' => $request->input('placas'),
                            'observaciones' => $request->input('observaciones'),
                            'kmParaServicio' => $request->input('kmservicio'),
                        ];

            $updateVehiculo = $this->Vehiculos->createVehiculo($id, $arrayVehiculo);
            return redirect('/vehiculos')->with('status', 'vehículo actualizado!'); //cambiar vista
        } catch (\Throwable $th) {
            return redirect()->route('vehiculos.vehiculos');
        }
    }

    
    public function destroy($id)
    {
        //
    }
}
