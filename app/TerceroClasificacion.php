<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerceroClasificacion extends Model
{
    protected $table = 'TerceroClasificacion';
     protected $primaryKey = 'idTerceroClasificacion';

     protected $fillable = [

        'idTerceroClasificacion',
        'idTercero',
        'idClasificacion',
        'estado',
        'fechaCrea',
        'fechaModifica',
        'idUsuarioCrea',
        'idUsuarioModifica',
    ];

  /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
