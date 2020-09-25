<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poliza extends Model
{
    protected $table = 'poliza';
    protected $primaryKey = 'idPoliza';
    protected $fillable = [
        'idPoliza',
        'codigo',
        'descripcion',
        'observaciones',
        'estado',
        'idUsuarioModifica',
        'idUsuarioCrea'
    ];

}
