<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiculoMatricula extends Model
{
    protected $table = 'vehiculomatricula';
    protected $fillable = [
        
        'idVehiculoMatricula',
        'idVehiculo',
        'idTercero	',
        'numeroLicenciaTransito	',
        'fechaRegistro',
        'tipoRegistro',
        'observaciones',
        'estado	',
        'fechaCrea',
        'fechaModifica',
        'idUsuarioCrea',
        'idUsuarioModifica',

    ];
}
