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
        return $cliente = DB::table('proveedores')->where('idProveedores', $idProveedor)->first();
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
}
