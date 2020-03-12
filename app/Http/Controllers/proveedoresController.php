<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedores;

class proveedoresController extends Controller
{
    protected $Proveedores;
    
    public function __construct(Proveedores $proveedores){
        $this->middleware('auth');
        $this->Proveedores = $proveedores;
    }

    public function index()
    {
        $ListadoProveedores = $this->Proveedores->getProveedores();
        return view('secciones.proveedores.listado', ['proveedores' => $ListadoProveedores]);
    }

    public function create()
    {
        return view('secciones.proveedores.nuevo', []);
    }

    public function store(Request $request)
    {
        try {
            $arrayProveedor = ['nombre' => $request->input('nombre'), 
                        'direccion' => $request->input('direccion')
                    ];

            $nuevoProveedor = $this->Proveedores->createProveedor($arrayProveedor);
            return redirect('/proveedores')->with(['status' => 'Proveedor creado!','context' => 'success']);
        } catch (\Throwable $th) {
            return redirect('/proveedores')->with(['status' => 'No se ha creado el proveedor!','context' => 'error']);
        }
    }

    public function show($id)
    {
        try {
            $proveedor = $this->Proveedores->getProveedor($id);
            
            if($proveedor){
                return view('welcome', ['proveedor' => $proveedor]); //cambiar vista
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('proveedores.proveedores');
        }
    }

    public function edit($id)
    {
        try {
            $proveedor = $this->Proveedores->getProveedor($id);
            
            if($proveedor){
                return view('welcome', ['proveedor' => $proveedor]); //cambiar vista
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('proveedores.proveedores');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $arrayProveedor = ['nombre' => $request->input('nombre'), 
                        'direccion' => $request->input('direccion')
                    ];

            $updateProveedor = $this->Proveedores->updateProveedor($arrayProveedor);
            return redirect('/proveedores')->with('status', 'proveedor actualizado!'); //cambiar vista

        } catch (\Throwable $th) {
            return redirect()->route('proveedores.proveedores');
        }
    }

}
