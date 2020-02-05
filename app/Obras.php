<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Obras extends Model
{
    public function getObras(){
        return $obras = DB::table('obras')
                            ->get()->toArray();
    }
}
