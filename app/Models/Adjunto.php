<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adjunto extends Model
{
    use HasFactory;

    protected $dateFormat ='Y-m-d\TH:i:s.s';

    protected $fillable = ['IDRequerimiento','Adjunto'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
       ];

    public function adjuntoreq(){
        return $this->hasMany('App\Models\Requerimiento','IDRequerimiento');
    }
}
