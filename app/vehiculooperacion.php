<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculooperacion extends Model
{
    protected $table = 'vehiculooperacion';
    protected $primaryKey = 'idVehiculoOperacion';
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
        'idUsuarioCrea',
        'idUsuarioModifica',

    ];
}
