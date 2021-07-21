<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientemail extends Model
{
    use HasFactory;

    protected $dateFormat ='Y-m-d\TH:i:s.s';

    protected $casts = [
     'created_at' => 'datetime',
     'updated_at' => 'datetime',
    ];
}
