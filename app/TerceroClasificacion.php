<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerceroClasificacion extends Model
{

    protected $table = 'terceroclasificacion';

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
