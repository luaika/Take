<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{

    protected $table = 'ruta';
    protected $primaryKey = 'idRuta';
<<<<<<< HEAD

    protected $fillable = [
=======
     protected $fillable = [
>>>>>>> 96f59a96637be6be98c1df177fd1a5ea441a6714

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
