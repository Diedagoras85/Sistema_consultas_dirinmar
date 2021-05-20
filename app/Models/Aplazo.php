<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplazo extends Model
{
    use HasFactory;

    //relacion uno a uno
    public function aplareq(){
        return $this->hasOne('App\Models\Requerimiento','IDRequerimiento');
    }
}
