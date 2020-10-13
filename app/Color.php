<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'color';
    protected $primeryKey = 'idColor';
    protected $fillable = [

        'idColor',
        'codigo',
        'descripcionColor',
        'estado',
        'idUsuarioCrea',
        'idUsuarioModifica',
    ];
}
