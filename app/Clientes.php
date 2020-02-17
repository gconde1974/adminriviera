<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Clientes extends Model
{
    public function getClientes(){
        $clientes = DB::table('clientes')
                        ->leftJoin('estado', 'clientes.idEstado', '=', 'estado.idEstado')
                        ->leftJoin('ciudad', 'clientes.idCiudad', '=', 'ciudad.idCiudad')
                        ->select(DB::raw('clientes.*, estado.nombre as estado, ciudad.nombre as ciudad'))
                        ->get();

        foreach ($clientes as $key => $item) {
            $primerSeg = $this->getPrimerSeguimiento($item->idClientes);
            $collection = collect($item)->put('seguimiento', $primerSeg);
            $clientes[$key] = $collection->toArray();
        }
        return $clientes;
    }

    public function getCliente($id){
        return $cliente = DB::table('clientes')->where('idClientes', $id)
                            ->leftJoin('estado', 'clientes.idEstado', '=', 'estado.idEstado')
                            ->leftJoin('ciudad', 'clientes.idCiudad', '=', 'ciudad.idCiudad')
                            ->select(DB::raw('clientes.*, estado.nombre as estado, ciudad.nombre as ciudad'))
                            ->first();
    }

    public function createCliente($arrayCliente)
    {
        return $cliente = DB::table('clientes')->insertGetId($arrayCliente);
    }

    public function updateCliente($idCliente, $arrayCliente)
    {
        return $update = DB::table('clientes')->where('idClientes', $idCliente)
                            ->update($arrayCliente);
    }

    public function getPrimerSeguimiento($idCliente)
    {
        return $seguimiento = DB::table('clienteSeguimiento')
                                ->join('medioContacto', 'clienteSeguimiento.idMedioContacto', '=', 'medioContacto.idMedioContacto')
                                ->select('clienteSeguimiento.*', DB::raw('medioContacto.descripcion as medio'))
                                ->where('idClientes', $idCliente)
                                ->oldest('fecha')->first();
    }

    public function getSeguimientoCliente($idCliente)
    {
        return $seguimiento = DB::table('clienteSeguimiento')->where('idClientes', $idCliente)
                                ->join('medioContacto', 'clienteSeguimiento.idMedioContacto', '=', 'medioContacto.idMedioContacto')
                                ->select('clienteSeguimiento.*', DB::raw('medioContacto.descripcion as medio'))
                                ->get()->toArray();
    }

    public function createSeguimientoCliente($arraySeguimiento)
    {
        return $seguimientoCliente = DB::table('clienteSeguimiento')->insertGetId($arraySeguimiento);
    }

    public function updateSeguimiento($idSeg, $arraySeguimiento)
    {
        return $update = DB::table('clienteSeguimiento')->where('idClienteSeguimiento', $idSeg)
                            ->update($arraySeguimiento);
    }

    public function getSeguimientoClientes()
    {
        return $seguimiento = DB::table('clienteSeguimiento')
                                ->join('clientes', 'clienteSeguimiento.idClientes', '=', 'clientes.idClientes')
                                ->join('medioContacto', 'clienteSeguimiento.idMedioContacto', '=', 'medioContacto.idMedioContacto')
                                ->select('clienteSeguimiento.*','clientes.nombre', DB::raw('medioContacto.descripcion as medio'))
                                ->get()->toArray();
    }
}
