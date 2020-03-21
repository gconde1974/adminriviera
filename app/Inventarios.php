<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inventarios extends Model
{
    public function getInventario()
    {
        return $inventario = DB::select('select * from producto');
    }

    public function getMateriales()
    {
        return $inventario = DB::table('producto')->where('tipoProducto', 1)
                ->join('materiales', 'materiales.idProducto', '=', 'producto.idProducto')
                ->join('productoProveedores', 'productoProveedores.idProducto', '=', 'producto.idProducto')
                ->join('proveedores', 'productoProveedores.idProveedores', '=', 'proveedores.idProveedores')
                ->select('producto.*','materiales.*', DB::raw('proveedores.idProveedores as idProveedor, proveedores.nombre as proveedor'))
                ->get()->toArray();
    }

    public function getMaterial($idProducto)
    {
        return $inventario = DB::table('producto')->where('producto.idProducto', $idProducto)
                ->join('materiales', 'materiales.idProducto', '=', 'producto.idProducto')
                ->join('productoProveedores', 'productoProveedores.idProducto', '=', 'producto.idProducto')
                ->join('proveedores', 'productoProveedores.idProveedores', '=', 'proveedores.idProveedores')
                ->select('producto.*','materiales.*', DB::raw('proveedores.idProveedores as idProveedor, proveedores.nombre as proveedor'))
                ->first();
    }

    public function getHerramientas()
    {
        return $inventario = DB::table('producto')->where('tipoProducto', 2)
                ->join('herramientas', 'herramientas.idProducto', '=', 'producto.idProducto')
                ->join('productoProveedores', 'productoProveedores.idProducto', '=', 'producto.idProducto')
                ->join('proveedores', 'productoProveedores.idProveedores', '=', 'proveedores.idProveedores')
                ->select('producto.*','herramientas.*', DB::raw('proveedores.idProveedores as idProveedor, proveedores.nombre as proveedor'))
                ->get()->toArray();
    }

    public function getHerramienta($idProducto)
    {
        return $inventario = DB::table('producto')->where('producto.idProducto', $idProducto)
                ->join('herramientas', 'herramientas.idProducto', '=', 'producto.idProducto')
                ->join('productoProveedores', 'productoProveedores.idProducto', '=', 'producto.idProducto')
                ->join('proveedores', 'productoProveedores.idProveedores', '=', 'proveedores.idProveedores')
                ->select('producto.*','herramientas.*', DB::raw('proveedores.idProveedores as idProveedor, proveedores.nombre as proveedor'))
                ->first();
    }

    public function getMovimientosInventario()
    {
        return $movimientosInv = DB::select('select * from movimientoInventario');
    }

    public function getMovimientoInventario($idMovimiento)
    {
        return $movimiento = DB::table('movimientoInventario')->where('idMovimientoInventario', $idMovimiento)
                            ->first();
    }

    public function getMovimientosInventarioProducto($idProducto)
    {
        return $movimientosProducto = DB::table('movimientoInventario')->where('idProducto', $idProducto)
                            ->get()->toArray();
    }


    public function createProducto($arrayProducto)
    {
        return $proveedor = DB::table('producto')->insertGetId($arrayProducto);
    }

    public function updateStockProducto($idProducto, $stock)
    {
        return $proveedor = DB::table('producto')->where('idProducto', $idProducto)
                                ->update(['stockActual' => $stock]);
    }

    public function createMaterial($arrayMaterial)
    {
        return $material = DB::table('materiales')->insert($arrayMaterial);
    }

    public function createHerramientas($arrayHerramienta)
    {
        return $herramienta = DB::table('herramientas')->insert($arrayHerramienta);
    }
    
    public function createMovimiento($arrayMovimiento)
    {
        return $movimiento = DB::table('movimientoInventario')->insertGetId($arrayMovimiento);
    }

    public function createProductoProveedor($arrayProductoProvee)
    {
        return $insert = DB::table('productoProveedores')->insert($arrayProductoProvee);
    }

    public function createPersonalHerramienta($arrayPersonalHerramienta)
    {
        return $insert = DB::table('personalHerramientas')->insert($arrayPersonalHerramienta);
    }
}
