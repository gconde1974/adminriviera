<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Obras extends Model
{
    public function getObras(){
        return $obras = DB::table('obras')
                            ->join('cotizaciones', 'cotizaciones.idObras', '=', 'obras.idObras')
                            ->join('clientes', 'cotizaciones.idClientes', '=', 'clientes.idClientes')
                            ->leftJoin('estado', 'obras.idEstado', '=', 'estado.idEstado')
                            ->leftJoin('ciudad', 'obras.idCiudad', '=', 'ciudad.idCiudad')
                            ->select(DB::raw('obras.*, cotizaciones.*, clientes.nombre, clientes.telefono, clientes.correo, estado.nombre as estado, ciudad.nombre as ciudad'))
                            ->get()->toArray();
    }

    public function getObra($idObra)
    {
        return $obra = DB::table('obras')->where('obras.idObras', $idObra)
                            ->join('cotizaciones', 'cotizaciones.idObras', '=', 'obras.idObras')
                            ->join('clientes', 'cotizaciones.idClientes', '=', 'clientes.idClientes')
                            ->leftJoin('estado', 'obras.idEstado', '=', 'estado.idEstado')
                            ->leftJoin('ciudad', 'obras.idCiudad', '=', 'ciudad.idCiudad')
                            ->select(DB::raw('obras.*, cotizaciones.*, clientes.nombre, clientes.telefono, clientes.correo, estado.nombre as estado, ciudad.nombre as ciudad'))
                            ->first();
    }

    public function createObra($arrayObra)
    {
        return $obra = DB::table('obras')->insertGetId($arrayObra);
    }

    public function updateObra($idObra, $arrayObra)
    {
        return $update = DB::table('obras')->where('idObras', $idObra)
                            ->update($arrayObra);
    }

    public function getBitacoraObra($idObra)
    {
        $bitacora = DB::table('bitacora')->where('idObras', $idObra)->get()->toArray();
        foreach ($bitacora as $key => $value) {
            $archivos = $this->getArchivosBitacora($value->idBitacora);
            $bitacora[$key]->archivos = $archivos;
        }
        return $bitacora;
    }

    public function createBitacora($arrayBitacora)
    {
        return $bitacora = DB::table('bitacora')->insertGetId($arrayBitacora);
    }

    public function createBitacoraArchivos($arrayBitacoraFile)
    {
        return $bitacora = DB::table('bitacoraArchivos')->insert($arrayBitacoraFile);
    }

    public function createObraPersonal($arrayObraPersonal)
    {
        return $ObraPersonal = DB::table('obrasPersonal')->insert($arrayObraPersonal);
    }

    public function createObraVehiculos($arrayObraVehiculos)
    {
        return $ObraVehiculos = DB::table('obrasVehiculos')->insert($arrayObraVehiculos);
    }

    public function getObraPersonal($idObra)
    {
        return $personalObra = DB::table('obrasPersonal')->where('idObras', $idObra)->get()->toArray();
    }

    public function getObraVehiculos($idObra)
    {
        return $vehiculosObra = DB::table('obrasVehiculos')->where('idObras', $idObra)->get()->toArray();
    }

    public function getArchivosBitacora($idBitacora)
    {
        return $archivos = DB::table('bitacoraArchivos')->where('idBitacora', $idBitacora)
                                ->join('archivos', 'archivos.idArchivos', '=', 'bitacoraArchivos.idArchivos')
                                ->get()->toArray();
    }
}
