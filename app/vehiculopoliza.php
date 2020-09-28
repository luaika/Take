<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculopoliza extends Model
{
    protected $table = 'vehiculopoliza';
    protected $primaryKey = 'idVehiculoPoliza';
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
        'idUsuarioCrea',
        'idUsuarioModifica',

    ];
}
