<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{

    protected $table = 'ruta';
    protected $primaryKey = 'idRuta';
     protected $fillable = [
        'idRuta',
        'codigo',
        'descripcion',
        'idBarrioInicia',
        'idBarrioTermina',
        'estado',
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
