<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventarios;

class inventariosController extends Controller
{
    protected $Inventarios;

    public function __construct(Inventarios $inventarios){
        $this->middleware('auth');
        $this->Inventarios = $inventarios;
    }
   
    public function index()
    {
        $Listado = $this->Inventarios->getInventario();
        return view('secciones.inventario.listado', ['Listado' => $Listado]);
    }

    public function materiales()
    {
        $Listado = $this->Inventarios->getMateriales();
        return view('secciones.inventario.materiaprima.listado', ['Listado' => $Listado]);
    }

    public function createMaterial()
    {
        $proveedores = [];
        return view('secciones.inventario.materiaprima.nuevo', ['proveedores' => $proveedores]);
    }

    public function herramientas()
    {
        $Listado = $this->Inventarios->getHerramientas();
        return view('secciones.inventario.herramienta.listado', ['Listado' => $Listado]);
    }

    public function createHerramientas()
    {
        $proveedores = [];
        return view('secciones.inventario.herramienta.nuevo', ['proveedores' => $proveedores]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

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
