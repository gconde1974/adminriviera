<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Obras extends Model
{
    public function getObras(){
        return $obras = DB::table('obras')
                            ->join('estado', 'obras.idEstado', '=', 'estado.idEstado')
                            ->join('ciudad', 'obras.idCiudad', '=', 'ciudad.idCiudad')
                            ->select('obras.*', 'estado.nombre', 'ciudad.nombre')
                            ->get()->toArray();
    }

    public function getObra($idObra)
    {
        return $obra = DB::table('obras')->where('idObras', $idObra)
                            ->join('estado', 'obras.idEstado', '=', 'estado.idEstado')
                            ->join('ciudad', 'obras.idCiudad', '=', 'ciudad.idCiudad')
                            ->select('obras.*', 'estado.nombre', 'ciudad.nombre')
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

    public function getBitacora($idObra)
    {
        return $bitacora = DB::table('bitacora')->where('idObras', $idObra)->get()->toArray();
    }
}
