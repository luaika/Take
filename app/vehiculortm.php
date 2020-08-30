<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculortm extends Model
{
    protected $fillable = [
        
        'idVehiculoRTM',
        'idVehiculo',
        'idTercero',
        'numeroCertificado',
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
