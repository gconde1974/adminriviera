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
        return $inventario = DB::select('select * from materiales');
    }

    public function getHerramientas()
    {
        return $inventario = DB::select('select * from herramientas');
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

    public function createMaterial($arrayMaterial)
    {
        return $material = DB::table('materiales')->insert($arrayMaterial);
    }

    public function createMovimiento($arrayMovimiento)
    {
        return $movimiento = DB::table('movimientoInventario')->insertGetId($arrayMovimiento);
    }

    public function createProductoProveedor($arrayProductoProvee)
    {
        return $proveedor = DB::table('productoProveedores')->insert($arrayProductoProvee);
    }
}
