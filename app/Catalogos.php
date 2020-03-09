<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Catalogos extends Model
{
    //table pais
    public function getPaises(){
        return $paises = DB::select('select * from pais');
    }

    public function getPaisById($id){
        return $pais = DB::table('pais')->where('idPais', '=', $id)->first();
    }

    //table estado
    public function getEstados(){
        return $estados = DB::select('select * from estado');
    }

    public function getEstadosByPais($idPais){
        return $estado = DB::table('estado')->where('idPais', '=', $idPais)->get()->toArray();
    }

    public function getEstadoById($id){
        return $estado = DB::table('estado')->where('idEstado', '=', $id)->first();
    }

    //table ciudad
    public function getCiudades(){
        return $ciudades = DB::select('select * from ciudad');
    }

    public function getCiudadesByEstado($idEstado){
        return $ciudad = DB::table('ciudad')->where('idEstado', '=', $idEstado)->get()->toArray();
    }

    public function getCiudadById($id){
        return $ciudad = DB::table('ciudad')->where('idCiudad', '=', $id)->first();
    }

    //table medioContacto
    public function getMediosContactos()
    {
        return $mediosContacto = DB::table('medioContacto')->where('activo', '=', 1)->get()->toArray();
    }

    public function getMedioContacto($whereArray)
    {
        return $medioContacto = DB::table('medioContacto')->where($whereArray)->first();
    }

    //table statusPersonal
    public function getStatusPersonal()
    {
        return $statusPersonal = DB::table('statusPersonal')->where('activo', '=', 1)->get()->toArray();
    }

    public function getStatus($whereArray)
    {
        return $statusPersonal = DB::table('statusPersonal')->where($whereArray)->first();
    }

    //table puestos
    public function getPuestosPersonal()
    {
        return $puestosPersonal = DB::table('puestos')->where('activo', '=', 1)->get()->toArray();
    }

    public function getPuestoPersonal($whereArray)
    {
        return $puestoPersonal = DB::table('puestos')->where($whereArray)->first();
    }

    //table tipoTramites
    public function getTiposTramites()
    {
        return $tiposTramites = DB::select('select * from tipoTramites');
    }

    public function getTipoTramiteById($id)
    {
        return $tipoTramite = DB::table('tipoTramites')->where('idTipoTramites', '=', $id)->first();
    }

    //table tipoMovimientoInventario
    public function getTiposMovimientosInventario()
    {
        return $tiposMovInventario = DB::select('select * from tipoMovimientoInventario');
    }

    public function getTipoMovimientoInventario($id)
    {
        return $tiposMovInventario = DB::table('tipoMovimientoInventario')
                                        ->where('idTipoMovimientoInventario', '=', $id)->first();
    }

    //table unidadMedida
    public function getUnidadesMedida()
    {
        return $unidadesMedida = DB::select('select * from unidadMedida');
    }

    public function getUnidadMedidaById($id)
    {
        return $unidadesMedida = DB::table('unidadMedida')->where('idUnidadMedida', '=', $id);
    }

    public function insertCiudad($arrayCiudades)
    {
        return $detalles = DB::table('ciudad')->insert($arrayCiudades);
    }

    public function insertArchivo($arrayArchivo)
    {
        return $detalles = DB::table('archivos')->insertGetId($arrayArchivo);
    }

}
