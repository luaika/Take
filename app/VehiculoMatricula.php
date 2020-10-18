<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiculoMatricula extends Model
{
    protected $table = 'vehiculomatricula';
    protected $primaryKey = 'idVehiculoMatricula';
    protected $fillable = [
        
        'idVehiculoMatricula',
        'idVehiculo',
        'idTercero',
        'numeroLicenciaTransito',
        'fechaRegistro',
        'tipoRegistro',
        'observaciones',
        'estado',
        'idUsuarioCrea',
        'idUsuarioModifica',

    ];
}
