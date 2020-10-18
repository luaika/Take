<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadisticas extends Model
{
    protected $table = 'estadisticas';

     protected $primaryKey = 'idEstadisticas';

     protected $fillable = [

        'idEstadisticas',
        'idUsuarios',
        'exceso_de_velocidad',
        'habla_por_celular',
        'tanquea_con_pasajeros',
        'omite_señales',
        'conduce_brusco',
        'trato_amable_cordial',
        'conduce_con_prudencia',
        'respeta_las_señales',
        'vehiculo_limpio',
        'viaje_agradable_limpio_Seguro'

     ];
}
