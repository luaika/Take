<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combustible extends Model
{
    protected $table = 'combustible';
    protected $primaryKey = 'idCombustible';
    protected $fillable = [
        'idCombustible',
        'codigo',
        'descripcionCombustible',
        'estado',
        'idUsuarioModifica',
        'idUsuarioCrea'
    ];
}
