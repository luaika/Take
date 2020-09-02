<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculoruta extends Model
{
    protected $fillable = [
        
        'idVehiculoRuta',
        'idVehiculo',
        'idRuta',
        'observaciones',
        'estado',
        'fechaCrea',
        'fechaModifica',
        'idUsuarioCrea',
        'idUsuarioModific',

    ];
}
