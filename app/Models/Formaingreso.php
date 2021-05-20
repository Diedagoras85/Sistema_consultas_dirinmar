<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formaingreso extends Model
{
    use HasFactory;

    // relacion uno a muchos
    public function reqfi(){
        return $this->hasMany('App\Models\Requerimiento','IDRequerimiento');
   }
}
