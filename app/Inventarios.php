<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inventarios extends Model
{
    public function getInventario()
    {
        return $inventario = DB::select('select * from productos');
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
}
