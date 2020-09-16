<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculo';
<<<<<<< HEAD
    protected $primeryKey= 'idVehiculo';
    
=======

    protected $primaryKey = 'idVehiculo';

>>>>>>> pb/master
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
        'idUsuarioCrea',
        'idUsuarioModific',
    ];
}
