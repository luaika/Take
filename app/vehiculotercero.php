<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculotercero extends Model
{
    protected $table = 'vehiculotercero';
    protected $primaryKey = 'idVehiculoTercero';
    protected $fillable = [
        
        'idVehiculoTercero',
        'idVehiculo',
        'idTercero',
        'fechaInicia',
        'fechaFin',
        'observaciones',
        'estado',
        'idUsuarioCrea',
        'idUsuarioModifica',

    ];
}
