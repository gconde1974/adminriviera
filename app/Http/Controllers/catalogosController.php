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
        $id = $request->input('id');
        $ciudades = $this->Catalogos->getCiudadesByEstado($id);

        return response($ciudades, 200)->header('Content-Type', 'json');
    }
}
