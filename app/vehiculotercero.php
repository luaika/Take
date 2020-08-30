<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculotercero extends Model
{
    protected $fillable = [
        
        'idVehiculoTercero',
        'idVehiculo',
        'idTercero',
        'fechaInicia',
        'fechaFin',
        'observaciones',
        'estado',
        'fechaCrea',
        'fechaModfiica',
        'idUsuarioCrea',
        'idUsuarioModific',

    ];
}
