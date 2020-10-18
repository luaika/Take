<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table ='marca';
    protected $primariKey ='idMarca';

    protected $fillable = [
        'idMarca',
        'codigo',
        'descripcionMarca',
        'estado',
        'idUsuarioCrea',
        'idUsuarioModifica'
    ];
}
