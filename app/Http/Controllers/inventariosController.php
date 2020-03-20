<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Inventarios;
use App\Proveedores;

class inventariosController extends Controller
{
    protected $Inventarios;
    protected $Proveedores;

    public function __construct(Inventarios $inventarios, Proveedores $proveedores){
        $this->middleware('auth');
        $this->Inventarios = $inventarios;
        $this->Proveedores = $proveedores;
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
        $proveedores = $this->Proveedores->getProveedores();
        return view('secciones.inventario.materiaprima.nuevo', ['proveedores' => $proveedores]);
    }

    public function entradaMaterial($id)
    {
        try {
            $material = $this->Inventarios->getMaterial($id);
            
            if($material){
                return view('secciones.inventario.materiaprima.entrada', ['material' => $material]);
            }
            throw new \Exception("Error Processing Request", 1);
        } catch (\Throwable $th) {
            return redirect('/inventario/materiales')->with(['status' => 'Error al obtener la información','context' => 'error']);
        }
    }

    public function salidaMaterial($id)
    {
        $material = [];
        return view('secciones.inventario.materiaprima.salida', ['material' => $material]);
    }

    public function devolucionMaterial($id)
    {
        $material = [];
        return view('secciones.inventario.materiaprima.devolucion', ['material' => $material]);
    }

    public function herramientas()
    {
        $Listado = $this->Inventarios->getHerramientas();
        return view('secciones.inventario.herramienta.listado', ['Listado' => $Listado]);
    }

    public function createHerramientas()
    {
        $proveedores = $this->Proveedores->getProveedores();
        return view('secciones.inventario.herramienta.nuevo', ['proveedores' => $proveedores]);
    }

    public function entradaHerramientas($id)
    {
        // $materiales = $this->Inventarios->getHerramientas($id);
        $herramienta = [];
        return view('secciones.inventario.herramienta.entrada', ['herramienta' => $herramienta]);
        
    }

    public function salidaHerramientas($id)
    {
        $herramienta = [];
        return view('secciones.inventario.herramienta.salida', ['herramienta' => $herramienta]);
    }

    public function devolucionHerramientas($id)
    {
        $herramienta = [];
        return view('secciones.inventario.herramienta.devolucion', ['herramienta' => $herramienta]);
    }

    public function storeProducto(Request $request)
    {
        $tipoProducto = $request->input('tipoProducto');
        try {
            DB::beginTransaction();
            //insert producto
            $arrayProducto = ['nombre' => $request->input('nombre'), 
                'tipoProducto' => $tipoProducto, //1 = materiales, 2 = herramientas
                'nombreTipoProducto' => $tipoProducto == 1 ? 'Materiales' : 'Herramientas',
                'stockInicial' => $request->input('stockinicial'),
                'stockActual' => $request->input('stockinicial'),
                'costo' => $request->input('costoUnitario'),
            ];

            $idProducto = $this->Inventarios->createProducto($arrayProducto);
            
            //insert movimiento inventario = entrada
            $arrayMovimiento = ['idProducto' => $idProducto, 
                'idTipoMovimiento' => $request->input('idTipoMovimiento'), //1 = entrada
                'cantidad' => $request->input('stockinicial'),
                'stockActual' => $request->input('stockinicial'),
                'idUnidadMedida' => $request->input('idUnidadMedida'),
                'idDatoMovimiento' => $request->input('idProveedor'),
                'costoUnitario' => $request->input('costoUnitario'),
                'fecha' => date('Y-m-d'),
                'entrada' => 1,
            ];

            $idMovimiento = $this->Inventarios->createMovimiento($arrayMovimiento);

            //insert producto proveedor
            $arrayProductoProvee = ['idProducto' => $idProducto, 
                'idProveedores' => $request->input('idProveedor'),
            ];

            $insertProductoProveedor = $this->Inventarios->createProductoProveedor($arrayProductoProvee);
            
            if($tipoProducto == 1) {
                //insert materiales
                $arrayMaterial = ['idProducto' => $idProducto, 
                    'nombre' => $request->input('nombre'),
                    'descripcion' => $request->input('descripcion'),
                    'observaciones' => $request->input('observaciones'),
                ];

                $insertMaterial = $this->Inventarios->createMaterial($arrayMaterial);
                DB::commit();
                return redirect('/inventario/materiales')->with(['status' => 'Material creado!', 'context' => 'success']);
            } else {
                //insert herramientas
                $arrayHerramientas = ['idProducto' => $idProducto, 
                    'nombre' => $request->input('nombre'),
                    'descripcion' => $request->input('descripcion'),
                    'observaciones' => $request->input('observaciones'),
                ];

                $insertHerramientas = $this->Inventarios->createHerramientas($arrayHerramientas);
                DB::commit();
                return redirect('/inventario/herramientas')->with(['status' => 'Herramienta creada!', 'context' => 'success']);
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            if($tipoProducto == 1) {
                return redirect('/inventario/materiales')->with(['status' => 'No se pudo crear el material','context' => 'error']);
            } else {
                return redirect('/inventario/herramientas')->with(['status' => 'No se pudo crear la herramienta','context' => 'error']);
            }
        }
    }

    public function productoEntrada(Request $request)
    {
        $tipoProducto = $request->input('tipoProducto');
        $stock = $request->input('stock');
        $stockActual = $request->input('cantidad') + $stock;
        $idProducto = $request->input('idProducto');

        try {
            // dd($stockActual);
            DB::beginTransaction();

            //insert movimiento inventario = entrada
            $arrayMovimiento = ['idProducto' => $idProducto, 
                'idTipoMovimiento' => $request->input('idTipoMovimiento'), //1 = entrada
                'cantidad' => $request->input('cantidad'),
                'stockActual' => $stockActual,
                'idUnidadMedida' => $request->input('idUnidadMedida'),
                'idDatoMovimiento' => $request->input('idProveedor'),
                'costoUnitario' => $request->input('costoUnitario'),
                'fecha' => date('Y-m-d'),
                'entrada' => 1,
            ];

            $idMovimiento = $this->Inventarios->createMovimiento($arrayMovimiento);
            $updateStock = $this->Inventarios->updateStockProducto($idProducto, $stockActual);
            DB::commit();

            if($tipoProducto == 1) {
                return redirect('/inventario/materiales')->with(['status' => 'Salida de material creada!', 'context' => 'success']);
            } else {
                return redirect('/inventario/herramientas')->with(['status' => 'Salida de herramienta creada!', 'context' => 'success']);
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            if($tipoProducto == 1) {
                return redirect('/inventario/materiales')->with(['status' => 'No se pudo crear la salida de material','context' => 'error']);
            } else {
                return redirect('/inventario/herramientas')->with(['status' => 'No se pudo crear la salida de herramienta','context' => 'error']);
            }
        }
    }

    public function productoSalida(Request $request)
    {
        //
    }

    public function productoDevolucion(Request $request)
    {
        //
    }

}
