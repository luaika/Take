<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $table = 'clase';
    protected $primaryKey = 'idClase';
    protected $fillable = [
        'idClase',
        'codigo',
        'descripcionClase',
        'estado',
        'idUsuarioModifica',
        'idUsuarioCrea'
    ];
}
