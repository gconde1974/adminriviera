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
}
