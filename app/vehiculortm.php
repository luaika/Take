<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculortm extends Model
{
    protected $table ='vehiculortm';
    protected $primaryKey = 'idVehiculoRTM';
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
        'idUsuarioModifica',

    ];
}
