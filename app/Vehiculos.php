<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vehiculos extends Model
{
    public function getVehiculos()
    {
        return $vehiculos = DB::select('select * from vehiculos');
    }

    public function getVehiculo($idVehiculo)
    {
        return $vehiculo = DB::table('vehiculos')->where('idVehiculos', $idVehiculo)->first();
    }

    public function createVehiculo($arrayVehiculo)
    {
        return $vehiculo = DB::table('vehiculos')->insertGetId($arrayVehiculo);
    }

    public function updateVehiculo($id, $arrayVehiculo)
    {
        return $update = DB::table('vehiculos')->where('idVehiculos', $id)
                            ->update($arrayVehiculo);
    }

    public function createTramite($arrayTramite)
    {
        return $tramite = DB::table('tramites')->insertGetId($arrayTramite);
    }

    public function createMantenimiento($arrayMantenimiento)
    {
        return $mantenimiento = DB::table('mantenimiento')->insertGetId($arrayMantenimiento);
    }

    public function createControlKM($arrayControl)
    {
        return $controlKM = DB::table('controlCombustibleKm')->insertGetId($arrayControl);
    }

    public function getTramitesVehiculo($idVehiculo)
    {
        return $tramites = DB::table('tramites')->where('idVehiculos', $idVehiculo)
                            ->join('tipoTramites', 'tramites.tipoTramite', '=', 'tipoTramites.idTipoTramites')
                            ->select('tramites.*', 'tipoTramites.descripcion')
                            ->get()->toArray();
    }

    public function getTramite($idTramite)
    {
        return $tramite = DB::table('tramites')->where('idTramites', $idTramite)
                            ->join('tipoTramites', 'tramites.tipoTramite', '=', 'tipoTramites.idTipoTramites')
                            ->select('tramites.*', 'tipoTramites.descripcion')
                            ->first();
    }

    public function getMantenimientoVehiculo($idVehiculo)
    {
        return $tramites = DB::table('mantenimiento')->where('idVehiculos', $idVehiculo)
                            ->get()->toArray();
    }

    public function getMantenimiento($idMantenimiento)
    {
        return $tramites = DB::table('mantenimiento')->where('idMantenimiento', $idMantenimiento)
                            ->first();
    }

    public function getControlKMVehiculo($idVehiculo)
    {
        return $tramites = DB::table('controlCombustibleKm')->where('idVehiculos', $idVehiculo)
                            ->get()->toArray();
    }

    public function getControlKM($idcontrol)
    {
        return $tramites = DB::table('controlCombustibleKm')->where('idControlCombustibleKm', $idcontrol)
                            ->first();
    }
}
