<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carroceria extends Model
{
    protected $table ='carroceria';
    protected $primaryKey = 'idCarroceria';
    protected $fillable = [
        'idCarroceria',
        'codigo',
        'descripcionCarroceria',
        'estado',
        'idUsuarioModifica',
        'idUsuarioCrea'
    ];
}
