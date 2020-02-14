<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalogos;

class catalogosController extends Controller
{
    protected $Catalogos;

    public function __construct(Catalogos $catalogos)
    {
        $this->Catalogos = $catalogos;
    }

    public function getCities(Request $request)
    {
        try {
            $id = $request->input('id');
            $ciudades = $this->Catalogos->getCiudadesByEstado($id);

            return response($ciudades, 200)->header('Content-Type', 'json');
        } catch (\Throwable $th) {
            return response([], 200)->header('Content-Type', 'json');
        }

    }

    public function inserts()
    {
        return view('insert');
    }

    public function insertCities(Request $request)
    {
        if ($request->hasFile('theFile')) {
            try {
                $data = file_get_contents($request->file('theFile')->getPathName(), true);
                $jsonCities = json_decode($data);
                $arrayCiudades = array();
                foreach ($jsonCities as $key => $value) {
                    $arrayCiudades[$key]['nombre'] = $value->nombre_municipio;
                    $arrayCiudades[$key]['idEstado'] = $value->clave_entidad;
                }
                // dd($arrayCiudades);
                $this->Catalogos->insertCiudad($arrayCiudades);
                return response(['mensaje' => 'Hecho!'], 200)->header('Content-Type', 'json');
            } catch (\Throwable $th) {
                return response(['mensaje' => 'Error, intente de nuevo!'], 200)->header('Content-Type', 'json');
            }
        }
    }
}
