<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculmatricula extends Model
{
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

'',