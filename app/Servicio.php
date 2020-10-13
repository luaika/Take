<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'servicio';
    protected $primaryKey = 'idServicio';

    protected $fillable = [
        'idServicio',
        'codigo',
        'descripcionServicio',
        'estado',
        'idUsuarioCrea',
        'idUsuarioModifica'
    ];
}
