<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Proveedores extends Model
{
    public function getProveedores()
    {
        return $proveedores = DB::select('select * from proveedores');
    }

    public function getProveedor($idProveedor)
    {
        return $proveedor = DB::table('proveedores')->where('idProveedores', $idProveedor)->first();
    }

    public function createProveedor($arrayProveedor)
    {
        return $proveedor = DB::table('proveedores')->insertGetId($arrayProveedor);
    } 

    public function updateProveedor($idProveedor, $arrayProveedor)
    {
        return $update = DB::table('proveedores')->where('idProveedores', $idProveedor)
                            ->update($arrayProveedor);
    }

    public function getProductosProveedor($idProveedor)
    {
        $herramientas = DB::table('producto')->where('tipoProducto', 2)
                        ->join('herramientas', 'herramientas.idProducto', '=', 'producto.idProducto')
                        ->join('productoProveedores', 'productoProveedores.idProducto', '=', 'producto.idProducto')
                        ->join('proveedores', 'productoProveedores.idProveedores', '=', 'proveedores.idProveedores')
                        ->select('producto.*',DB::raw('herramientas.idProducto, herramientas.nombre, herramientas.descripcion, herramientas.observaciones, proveedores.idProveedores as idProveedor, proveedores.nombre as proveedor'))
                        ->where('proveedores.idProveedores', $idProveedor);

        return $inventario = DB::table('producto')->where('tipoProducto', 1)
                            ->join('materiales', 'materiales.idProducto', '=', 'producto.idProducto')
                            ->join('productoProveedores', 'productoProveedores.idProducto', '=', 'producto.idProducto')
                            ->join('proveedores', 'productoProveedores.idProveedores', '=', 'proveedores.idProveedores')
                            ->select('producto.*','materiales.*', DB::raw('proveedores.idProveedores as idProveedor, proveedores.nombre as proveedor'))
                            ->where('proveedores.idProveedores', $idProveedor)
                            ->union($herramientas)
                            ->get()->toArray();
    }
}
