<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Clientes extends Model
{
    
    public function getClientes(){
        return $clientes = DB::select('select * from clientes');
    }

    public function getCliente($id){
        return $cliente = DB::table('clientes')->where('idClientes')
                            ->join('estado', 'clientes.idEstado', '=', 'estado.idEstado')
                            ->join('ciudad', 'clientes.idCiudad', '=', 'ciudad.idCiudad')
                            ->select('clientes.*', 'estado.nombre', 'ciudad.nombre')
                            ->first();
    }

    public function createCliente($arrayCliente)
    {
        return $cliente = DB::table('clientes')->insertGetId($arrayCliente);
    }

    public function updateCliente($idCliente, $arrayCliente)
    {
        return $update = DB::table('clientes')->where('idCliente', $idCliente)
                            ->update($arrayCliente);
    }

    public function getSeguimientoCliente($idCliente)
    {
        //unir con tabla medioContacto
        return $seguimiento = DB::table('clienteSeguimiento')->where('idClientes', '=', $idCliente)
                                ->join('medioContacto', 'clienteSeguimiento.idMedioContacto', '=', 'medioContacto.idMedioContacto')
                                ->select('clienteSeguimiento.*', 'medioContacto.descripcion')
                                ->get()->toArray();
    }

    public function createSeguimientoCliente($arraySeguimiento)
    {
        return $seguimientoCliente = DB::table('clienteSeguimiento')->insertGetId($arraySeguimiento);
    }

}
