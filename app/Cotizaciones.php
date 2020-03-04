<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cotizaciones extends Model
{
    public function getCotizaciones()
    {
        return $cotizaciones = DB::table('cotizaciones')
                            ->join('clientes', 'cotizaciones.idClientes', '=', 'clientes.idClientes')
                            ->join('responsablesCotizacion', 'cotizaciones.idResponsableCotizacion', '=', 'responsablesCotizacion.idResponsablesCotizacion')
                            ->select(DB::raw('cotizaciones.*, clientes.nombre as cliente, responsablesCotizacion.nombre'))
                            ->get()->toArray();
    }

    public function getCotizacionesCliente($id)
    {
        return $cotizaciones = DB::table('cotizaciones')->where('cotizaciones.idClientes', $id)
                            ->join('clientes', 'cotizaciones.idClientes', '=', 'clientes.idClientes')
                            ->join('responsablesCotizacion', 'cotizaciones.idResponsableCotizacion', '=', 'responsablesCotizacion.idResponsablesCotizacion')
                            ->select(DB::raw('cotizaciones.*, clientes.nombre as cliente, responsablesCotizacion.nombre'))
                            ->get()->toArray();
    }

    public function getCotizacion($idCotizacion)
    {
        return $cotizaciones = DB::table('cotizaciones')->where('idCotizaciones',$idCotizacion)
                            ->join('clientes', 'cotizaciones.idClientes', '=', 'clientes.idClientes')
                            ->join('responsablesCotizacion', 'cotizaciones.idResponsableCotizacion', '=', 'responsablesCotizacion.idResponsablesCotizacion')
                            ->select(DB::raw('cotizaciones.*, clientes.nombre as cliente, responsablesCotizacion.nombre'))
                            ->first();
    }

    public function createCotizacion($arrayCotizacion)
    {
        return $cotizacion = DB::table('cotizaciones')->insertGetId($arrayCotizacion);
    }

    public function getDetalleCotizacion($idCotizacion)
    {
        return $detalleCotizacion = DB::table('detalleCotizacion')->where('idCotizaciones',$idCotizacion)
                            ->get()->toArray();
    }

    public function createDetalleCotizacion($arrayDetalleCotizacion)
    {
        return $detalles = DB::table('detalleCotizacion')->insert($arrayDetalleCotizacion);
    }

    public function getArchivosCotizacion($idCotizacion)
    {
        return $archivosCotizacion = DB::table('cotizacionesArchivos')->where('idCotizaciones',$idCotizacion)
                            ->join('archivos', 'cotizacionesArchivos.idArchivos', '=', 'archivos.idArchivos')
                            ->select('archivos.*', 'cotizacionesArchivos.idCotizaciones')
                            ->get()->toArray();
    }

    public function createArchivosCotizacion($arrayArchivo, $idCotizacion)
    {
        return $result = DB::transaction(function ($arrayArchivo, $idCotizacion) {
                    $idarchivo = DB::table('archivos')->insert($arrayArchivo);
                    DB::table('cotizacionesArchivos')->insert(['idCotizaciones' => $idCotizacion, 'idArchivos' => $idarchivo]);
                }, 3);
    }

    public function getAnticiposCotizacion($idCotizacion)
    {
        return $anticiposCotizacion = DB::table('anticipos')->where('idCotizaciones',$idCotizacion)
                            ->get()->toArray();
    }

    public function createAnticiposCotizacion($arrayAnticipos)
    {
        return $anticipos = DB::table('anticipos')->insert($arrayAnticipos);
    }

    public function getResponsables()
    {
        return $responsables = DB::select('select * from responsablesCotizacion');
    }

    public function updateObraCotizacion($idCotizacion, $idObra)
    {
        return $update = DB::table('cotizaciones')
                            ->where('idCotizaciones', $idCotizacion)
                            ->update(['idObras' => $idObra]);
    }
}
