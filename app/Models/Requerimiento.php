<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requerimiento extends Model
{
    use HasFactory;
    
    protected $dateFormat ='Y-m-d\TH:i:s.s';

    protected $fillable = ['CDSolicitud','GLRequerimiento','IDClasificacion','FCIngreso','FCRespuesta','IDFormaIngreso','LGRespondido','NRDiaatraso','GLRespuesta','NRHh','IDAdjunto'];

    protected $casts = [
     'FCIngreso' => 'datetime',
     'FCRespuesta' => 'datetime',  
     'create_at' => 'datetime',
     'update_at' => 'datetime',
    ];
    
    //relacion uno a uno inversa
    public function reqaplazoinv(){
        return $this->hasOne('App\Models\Aplazo','IDRequerimiento');
    }

    public function cliereqinv(){
        return $this->belongsTo('App\Models\Cliente','IDCliente');
    }

    public function cliefiinv(){
        return $this->belongsTo('App\Models\Formaingreso','IDFormaIngreso');
    }

}
