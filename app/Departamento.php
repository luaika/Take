<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';
    protected $primaryKey = 'idDepartamento';
    protected $fillable = [
        'idDepartamento',
        'codigoDane',
        'descripcion',
        'estado',
        'idUsuarioCrea',
        'idUsuarioModifica'
    ];
}
