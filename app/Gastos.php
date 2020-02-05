<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gastos extends Model
{
    public function getGastos()
    {
        return $gastos = DB::select('select * from gastos');
    }

    public function getGasto($idGasto)
    {
        return $gasto = DB::table('gastos')->where('idGastos', $idGasto)->first();
    }

    public function getGastosByDate($date)
    {
        //->whereBetween('votes', [1, 100])
        return $gastos = DB::table('gastos')->whereDate('fecha', $date)->get()->toArray();
    }

    public function createGasto($arrayGasto)
    {
        return $gasto = DB::table('gastos')->insertGetId($arrayGasto);
    }
}
