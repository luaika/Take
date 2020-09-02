<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculooperacion extends Model
{
    protected $fillable = [
        
        'idVehiculoOperacion',
        'idVehiculo',
        'idTercero',
        'numeroTarjetaOperacion',
        'fechaExpedicion',
        'fechaVigenciaInicia',
        'fechaVigenciaFin',
        'observaciones',
        'estado',
        'fechaCrea',
        'fechaModifica',
        'idUsuarioCrea',
        'idUsuarioModific',

    ];
}
