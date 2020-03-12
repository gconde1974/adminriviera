<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Personal extends Model
{
    public function getListadoPersonal()
    {
        return $personal = DB::table('personal')
                            ->join('statusPersonal', 'personal.status', '=', 'statusPersonal.idStatusPersonal')
                            ->join('puestos', 'personal.idPuestos', '=', 'puestos.idPuestos')
                            ->select('personal.*', DB::raw('statusPersonal.descripcion as estatus, puestos.descripcion as puesto'))
                            ->get()->toArray();
    }

    public function getPersonal($idPersonal)
    {
        return $personal = DB::table('personal')->where('idPersonal', $idPersonal)
                            ->join('statusPersonal', 'personal.status', '=', 'statusPersonal.idStatusPersonal')
                            ->join('puestos', 'personal.idPuestos', '=', 'puestos.idPuestos')
                            ->select('personal.*', DB::raw('statusPersonal.descripcion as estatus, puestos.descripcion as puesto'))
                            ->first();
    }

    public function createPersonal($arrayPersonal)
    {
        return $personal = DB::table('personal')->insertGetId($arrayPersonal);
    }

    public function updatePersonal($idPersonal, $arrayPersonal)
    {
        return $update = DB::table('personal')->where('idPersonal', $idPersonal)
                            ->update($arrayPersonal);
    }
}
