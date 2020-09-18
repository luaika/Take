<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barrio extends Model
{

    protected $table = 'barrio';
     protected $primaryKey = 'idBarrio';

     protected $fillable = [

        'idBarrio',
        'idMunicipio',
        'nombreBarrio',
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
