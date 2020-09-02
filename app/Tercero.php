<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model
{

    protected $table = 'tercero';

     protected $primaryKey = 'idTercero';

     protected $fillable = [
        'idTercero',
        'numeroIdentificacion',
        'tipoIdentificacion',
        'nombres',
        'apellidos',
        'razonSocial',
        'nombreComercial',
        'genero',
        'fechaNacimiento',
        'telefono',
        'celular',
        'email',
        'direccion',
        'idMunicipio',
        'foto',
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
