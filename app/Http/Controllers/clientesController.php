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
        $this->middleware(['auth', 'rol.admin']);
        $this->Clientes = $clientes;
        $this->Catalogos = $catalogos;
    }

    public function index()
    {
        $Listadoclientes = $this->Clientes->getClientes();
        // dd(auth()->user()->rol);
        return view('secciones.clientes.listado', ['clientes' => $Listadoclientes]);
    }

    public function seguimiento()
    {
        $seguimientoclientes = $this->Clientes->getSeguimientoClientes();
        return view('secciones.clientes.seguimiento', ['seguimientos' => $seguimientoclientes]);
    }

    public function create()
    {
        $paises = $this->Catalogos->getPaises();
        $idPais = 1; //México
        $idDefaultEdo = 23; //Quintana roo
        $estados = $this->Catalogos->getEstadosByPais($idPais);
        $ciudades = $this->Catalogos->getCiudadesByEstado($idDefaultEdo); 
        $mediosContacto = $this->Catalogos->getMediosContactos();

        return view('secciones.clientes.nuevo', ['iddefault' =>$idDefaultEdo,'estados' => $estados, 'ciudades' => $ciudades, 'medios' => $mediosContacto]);
    }

    public function store(Request $request)
    {
        try { 
            DB::beginTransaction();
            $arrayCliente = ['nombre' => $request->input('nombre'), 
                        'telefono' => $request->input('tel'),
                        'correo' => $request->input('email'),
                        'direccion' => $request->input('direccion'),
                        'idCiudad' => $request->input('idciudad'),
                        'idEstado' => $request->input('idestado'),
                        'fechaRegistro' => date("Y-m-d")];

            $nuevoCliente = $this->Clientes->createCliente($arrayCliente);

            $arraySeguimiento = ['idClientes' => $nuevoCliente,
                            'fecha' => date("Y-m-d"),
                            'idMedioContacto' => $request->input('medio'),
                            'descripcion' => $request->input('descripcion'),
                            'metrosCuadrados' => $request->input('metrosC')
                        ];

            $nuevoSeguimiento = $this->Clientes->createSeguimientoCliente($arraySeguimiento);
            DB::commit();
            return redirect('/clientes/seguimiento/'.$nuevoCliente)->with(['status' => 'Cliente creado!','context' => 'success']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('/clientes')->with(['status' => 'No se ha creado el cliente!' ,'context' => 'error']);
        }
    }

    public function show($id)
    {
        try {
            $cliente = $this->Clientes->getCliente($id);
            
            if($cliente){
                return view('secciones.clientes.listado', ['cliente' => $cliente]);
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
            
            if($cliente){
                return view('secciones.clientes.edicion', ['cliente' => $cliente, 'seguimiento' => $primerSeguimiento, 'estados' => $estados, 'ciudades' => $ciudades, 'medios' => $mediosContacto]);
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect('/clientes')->with(['status' => 'No se pudo obtener la información','context' => 'error']);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $arrayCliente = ['nombre' => $request->input('nombre'), 
                        'telefono' => $request->input('tel'),
                        'correo' => $request->input('email'),
                        'direccion' => $request->input('direccion'),
                        'idCiudad' => $request->input('idciudad'),
                        'idEstado' => $request->input('idestado'),
                    ];

            $updateCliente = $this->Clientes->updateCliente($id, $arrayCliente);

            $arraySeguimiento = ['idClientes' => $id,
                            'idMedioContacto' => $request->input('medio'),
                            'descripcion' => $request->input('descripcion'),
                            'metrosCuadrados' => $request->input('metrosC')
                        ];
            $idseguimiento = $request->input('idSeguimiento');
            $nuevoSeguimiento = $this->Clientes->updateSeguimiento($idseguimiento, $arraySeguimiento);
            DB::commit();
            return redirect('/clientes')->with(['status' => 'Cliente actualizado!','context' => 'success']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect('/clientes')->with(['status' => 'Cliente NO actualizado!','context' => 'error']);
        }
    }

    public function showSeguimientoCliente($id)
    {
        try {
            $cliente = $this->Clientes->getCliente($id);
            $seguimiento = $this->Clientes->getSeguimientoCliente($id);
            if($cliente)
                return view('secciones.clientes.seguimientoClienteGeneral', ['cliente' => $cliente, 'seguimientos' => $seguimiento]); //cambiar vista
            
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect('/clientes/seguimiento')->with(['status' => 'Información no disponible!','context' => 'error']);
        }
    }

    public function nuevoSeguimiento($id)
    {
        $idCliente = $id;
        try {
            $cliente = $this->Clientes->getCliente($id);
            $mediosContacto = $this->Catalogos->getMediosContactos();
            
            if($cliente){
                return view('secciones.clientes.seguimientoIndEdicion', ['cliente' => $cliente, 'medios' => $mediosContacto]);
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect('/clientes')->with(['status' => 'No se pudo obtener la información','context' => 'error']);
        }
    }

    public function createSeguimiento(Request $request, $id)
    {
        try {
            $arraySeguimiento = ['idClientes' => $request->input('id'),
                            'fecha' => date('Y-m-d'),
                            'idMedioContacto' => $request->input('medio'),
                            'descripcion' => $request->input('descripcion')
                        ];
            $nuevoSeguimiento = $this->Clientes->createSeguimientoCliente($arraySeguimiento);
            return redirect('/clientes/seguimiento/'.$id)->with(['status' => 'Seguimiento creado!', 'context' => 'success']); 
        } catch (\Throwable $th) {
            return redirect('/clientes/seguimiento/'.$id)->with(['status' => 'No se pudo crear el seguimiento','context' => 'error']);
        }
    }

}
