<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculoruta extends Model
{
    protected $table='vehiculoruta';
    protected $primaryKey = 'idVehiculoRuta';
    protected $fillable = [
        'idVehiculo',
        'idRuta',
        'observaciones',
        'estado',
        'idUsuarioCrea',
        'idUsuarioModifica',

    ];
}
