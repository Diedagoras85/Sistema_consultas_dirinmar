<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paise extends Model
{
    use HasFactory;


    // relacion uno a muchos
    public function cliepaisinv(){
        return $this->hasMany('App\Models\Cliente','IDCliente');
   }


}
