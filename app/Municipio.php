<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipio';
    protected $primaryKey = 'idMunicipio';
    protected $fillable = [
        'idMunicipio',
        'idDepartamento',
        'codigoDane',
        'descripcion',
        'estado',
        'idUsuarioCrea',
        'idUsuarioModifica'
    ];
}
