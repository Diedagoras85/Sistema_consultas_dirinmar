<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $dateFormat ='Y-m-d\TH:i:s.s';

    protected $fillable = ['NMCliente','NRRun','NMDireccion','NRTelefono','NRMovil','GLEmpresa','GLCiudad','NMPais'];

    protected $casts = [
     'created_at' => 'datetime',
     'updated_at' => 'datetime',
    ];
    

    // relacion uno a muchos
    public function cliereq(){
         return $this->hasMany('App\Models\Requerimiento','IDRequerimiento');
    }

    public function cliemail(){
        return $this->hasMany('App\Models\Email','IDEmail');
    }

   //Relacion uno a muchos inversa
   //public function cliepais(){
   // return $this->belongsTo('App\Models\Paise','IDPais');
   //}
}
