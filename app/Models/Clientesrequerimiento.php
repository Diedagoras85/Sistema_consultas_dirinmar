<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientesrequerimiento extends Model
{
    use HasFactory;

    protected $dateFormat ='Y-m-d\TH:i:s.s';

    protected $fillable = ['IDCliente','IDRequerimiento'];

    protected $casts = [
     'create_at' => 'datetime',
     'update_at' => 'datetime',
    ];
}
