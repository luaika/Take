<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculopoliza extends Model
{
    protected $fillable = [
        
        'idVehiculoPoliza',
        'idVehiculo',
        'idPoliza',
        'idTercero',
        'numeroPoliza',
        'fechaExpedicion',
        'fechaVigenciaInicio',
        'fechaVegenciaFin',
        'observaciones',
        'estado',
        'fechaCrea',
        'fechaModifica',
        'idUsuarioCrea',
        'idUsuarioModific',

    ];
}
