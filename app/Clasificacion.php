<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{

    protected $table = 'clasificacion';
    protected $primaryKey = 'idClasificacion';

    protected $fillable = [

       'idClasificacion',
       'codigo',
       'descripcion',
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
