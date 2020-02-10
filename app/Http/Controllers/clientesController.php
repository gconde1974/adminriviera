<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Clientes;
use App\Catalogos;

class clientesController extends Controller
{
    protected $Clientes;
    protected $Catalogos;

    public function __construct(Clientes $clientes, Catalogos $catalogos)
    {
        $this->Clientes = $clientes;
        $this->Catalogos = $catalogos;
    }

    public function index()
    {
        $Listadoclientes = $this->Clientes->getClientes();
        // dd($Listadoclientes);
        return view('secciones.clientes.listado', ['clientes' => $Listadoclientes]); //cambiar vista
    }

    public function create()
    {
        $paises = $this->Catalogos->getPaises();
        $idPais = 1; //México
        $estados = $this->Catalogos->getEstadosByPais($idPais);

        $mediosContacto = $this->Catalogos->getMediosContactos();

        return view('secciones.clientes.nuevo', ['estados' => $estados, 'medios' => $mediosContacto]); //cambiar vista
    }

    public function store(Request $request)
    {
        // dd($request->all());
        try {
            DB::beginTransaction();
            $arrayCliente = ['nombre' => $request->input('nombre'), 
                        'telefono' => $request->input('tel'),
                        'correo' => $request->input('email'),
                        'direccion' => $request->input('direccion'),
                        'idCiudad' => $request->input('idciudad'),
                        'idEstado' => $request->input('idestado'),
                        'fechaRegistro' => date("d-m-Y")];

            $nuevoCliente = $this->Clientes->createCliente($arrayCliente);

            $arraySeguimiento = ['idClientes' => $nuevoCliente,
                            'fecha' => date("Y-m-d"),
                            'idMedioContacto' => $request->input('medio'),
                            'descripcion' => $request->input('descripcion'),
                            'metrosCuadrados' => $request->input('metrosC')
                        ];

            $nuevoSeguimiento = $this->Clientes->createSeguimientoCliente($arraySeguimiento);
            DB::commit();
            return redirect('/clientes')->with(['status' => 'cliente creado!','context' => 'success']);
        } catch (\Throwable $th) {
            DB::rollBack();
            // dd($th);
            return redirect('/clientes')->with(['status' => 'No se ha creado el cliente!' ,'context' => 'error']);
        }
    }

    public function show($id)
    {
        try {
            $cliente = $this->Clientes->getCliente($id);
            
            if($cliente){
                return view('secciones.clientes.listado', ['cliente' => $cliente]); //cambiar vista
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect()->route('clientes.clientes');
        }
    }

    public function edit($id)
    {
        try {
            $cliente = $this->Clientes->getCliente($id);
            $primerSeguimiento = $this->Clientes->getPrimerSeguimiento($id);
            $paises = $this->Catalogos->getPaises();
            $idPais = 1; //México
            $estados = $this->Catalogos->getEstadosByPais($idPais);
            $ciudades = $this->Catalogos->getCiudadesByEstado($cliente->idEstado);
            $mediosContacto = $this->Catalogos->getMediosContactos();
            // dd($cliente);
            if($cliente){
                return view('secciones.clientes.edicion', ['id' => $id, 'cliente' => $cliente, 'seguimiento' => $primerSeguimiento, 'estados' => $estados, 'ciudades' => $ciudades, 'medios' => $mediosContacto]);
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            // return redirect()->route('clientes.clientes');
            return redirect('/clientes')->with(['status' => 'no se pudo obtener la información','context' => 'error']);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            dd($request->all());


            DB::beginTransaction();
            $arrayCliente = ['nombre' => $request->input('nombre'), 
                        'telefono' => $request->input('tel'),
                        'correo' => $request->input('email'),
                        'direccion' => $request->input('direccion'),
                        'idCiudad' => $request->input('idciudad'),
                        'idEstado' => $request->input('idestado'),
                    ];

            $updateCliente = $this->Clientes->updateCliente($id, $arrayCliente);
            

            $arraySeguimiento = ['idClientes' => $nuevoCliente,
                            'idMedioContacto' => $request->input('medio'),
                            'descripcion' => $request->input('descripcion'),
                            'metrosCuadrados' => $request->input('metrosC')
                        ];

            $nuevoSeguimiento = $this->Clientes->createSeguimientoCliente($arraySeguimiento);
            DB::commit();
            return redirect('/clientes')->with(['status' => 'cliente actualizado!','context' => 'success']);
        } catch (\Throwable $th) {
            return redirect()->route('clientes.clientes');
        }
    }

    public function showSeguimientoCliente($id)
    {
        $seguimiento = $this->Catalogos->getSeguimientoCliente($id);
        return view('welcome', ['seguimiento' => $seguimiento]); //cambiar vista
    }

    public function nuevoSeguimiento()
    {
        $mediosContacto = $this->Catalogos->getMediosContactos();

        return view('welcome', ['mediosContacto' => $mediosContacto]); //cambiar vista
    }

    public function createSeguimiento(Request $request, $id)
    {
        try {
            $arraySeguimiento = ['idCliente' => $request->input('idCliente'),
                            'fecha' => $request->input('fecha'),
                            'idMedioContacto' => $request->input('idMedio'),
                            'descripcion' => $request->input('descripcion')
                        ];

            $nuevoSeguimiento = $this->Clientes->createSeguimientoCliente($arraySeguimiento);
            return redirect('/clientes')->with('status', 'seguimiento creado!'); //cambiar vista
        } catch (\Throwable $th) {
            return redirect()->route('clientes.seguimiento');
        }
    }

}
