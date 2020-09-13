<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
    protected $table = 'vehiculo';

    protected $primaryKey = 'idVehiculo';

    protected $fillable = [

        'idVehiculo',
        'placa',
        'numeroInterno',
        'idVehiculoMatricula',
        'idServicio',
        'idClase',
        'idMarca',
        'idColor',
        'idCarroceria',
        'idCombustible',
        'linea',
        'modelo',
        'numeroSerie',
        'numeroChasis',
        'numeroMotor',
        'numeroPuertas',
        'numeroPasajeros',
        'observaciones',
        'estado',
        'fechaCrea',
        'fechaModifica',
        'idUsuarioCrea',
        'idUsuarioModific',
    ];
}
