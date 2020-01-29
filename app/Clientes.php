<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Clientes extends Model
{
    
    public function getClientes(){
        return $clientes = DB::select('select * from clientes');
    }

}
