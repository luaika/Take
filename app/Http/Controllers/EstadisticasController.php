<?php

namespace App\Http\Controllers;

use App\Estadisticas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstadisticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $exceso_de_velocidadTru = Estadisticas::select('exceso_de_velocidad')
            ->where('exceso_de_velocidad','1')
            ->get();

            $exceso_de_velocidadTrue = count($exceso_de_velocidadTru);

            $exceso_de_velocidadFals = Estadisticas::select('exceso_de_velocidad')
            ->where('exceso_de_velocidad','2')
            ->get();

            $exceso_de_velocidadFalse = count($exceso_de_velocidadFals);

            $habla_por_celularTru = Estadisticas::select('habla_por_celular')
            ->where('habla_por_celular','1')
            ->get();

            $habla_por_celularTrue = count($habla_por_celularTru);

            $habla_por_celularFals = Estadisticas::select('habla_por_celular')
            ->where('habla_por_celular','2')
            ->get();

            $habla_por_celularFalse = count($habla_por_celularFals);

            $tanquea_con_pasajerosTru = Estadisticas::select('tanquea_con_pasajeros')
            ->where('tanquea_con_pasajeros','1')
            ->get();

            $tanquea_con_pasajerosTrue = count($tanquea_con_pasajerosTru);

            $tanquea_con_pasajerosFals = Estadisticas::select('tanquea_con_pasajeros')
            ->where('tanquea_con_pasajeros','2')
            ->get();

            $tanquea_con_pasajerosFalse = count($tanquea_con_pasajerosFals);

            $omite_señalesTru = Estadisticas::select('omite_señales')
            ->where('omite_señales','1')
            ->get();

            $omite_señalesTrue = count($omite_señalesTru);

            $omite_señalesFals = Estadisticas::select('omite_señales')
            ->where('omite_señales','2')
            ->get();

            $omite_señalesFalse = count($omite_señalesFals);


            $conduce_bruscoTru = Estadisticas::select('conduce_brusco')
            ->where('conduce_brusco','1')
            ->get();

            $conduce_bruscoTrue = count($conduce_bruscoTru);

            $conduce_bruscoFals = Estadisticas::select('conduce_brusco')
            ->where('conduce_brusco','2')
            ->get();

            $conduce_bruscoFalse = count($conduce_bruscoFals);

            $trato_amable_cordialTru = Estadisticas::select('trato_amable_cordial')
            ->where('trato_amable_cordial','1')
            ->get();

            $trato_amable_cordialTrue = count($trato_amable_cordialTru);

            $trato_amable_cordialFals = Estadisticas::select('trato_amable_cordial')
            ->where('trato_amable_cordial','2')
            ->get();

            $trato_amable_cordialFalse = count($trato_amable_cordialFals);

            $conduce_con_prudenciaTru = Estadisticas::select('conduce_con_prudencia')
            ->where('conduce_con_prudencia','1')
            ->get();

            $conduce_con_prudenciaTrue = count($conduce_con_prudenciaTru);

            $conduce_con_prudenciaFals = Estadisticas::select('conduce_con_prudencia')
            ->where('conduce_con_prudencia','2')
            ->get();

            $conduce_con_prudenciaFalse = count($conduce_con_prudenciaFals);

            $respeta_las_señalesTru = Estadisticas::select('respeta_las_señales')
            ->where('respeta_las_señales','1')
            ->get();

            $respeta_las_señalesTrue = count($respeta_las_señalesTru);

            $respeta_las_señalesFals = Estadisticas::select('respeta_las_señales')
            ->where('respeta_las_señales','2')
            ->get();

            $respeta_las_señalesFalse = count($respeta_las_señalesFals);

            $vehiculo_limpioTru = Estadisticas::select('vehiculo_limpio')
            ->where('vehiculo_limpio','1')
            ->get();

            $vehiculo_limpioTrue = count($vehiculo_limpioTru);

            $vehiculo_limpioFals = Estadisticas::select('vehiculo_limpio')
            ->where('vehiculo_limpio','2')
            ->get();

            $vehiculo_limpioFalse = count($vehiculo_limpioFals);

            $viaje_agradable_limpio_SeguroTru = Estadisticas::select('viaje_agradable_limpio_Seguro')
            ->where('viaje_agradable_limpio_Seguro','1')
            ->get();

            $viaje_agradable_limpio_SeguroTrue = count($viaje_agradable_limpio_SeguroTru);

            $viaje_agradable_limpio_SeguroFals = Estadisticas::select('viaje_agradable_limpio_Seguro')
            ->where('viaje_agradable_limpio_Seguro','2')
            ->get();

            $viaje_agradable_limpio_SeguroFalse = count($viaje_agradable_limpio_SeguroFals);

            return view('layouts.estadisticas',compact(
            'exceso_de_velocidadTrue',
            'habla_por_celularTrue',
            'tanquea_con_pasajerosTrue',
            'omite_señalesTrue',
            'conduce_bruscoTrue',
            'trato_amable_cordialTrue',
            'conduce_con_prudenciaTrue',
            'respeta_las_señalesTrue',
            'vehiculo_limpioTrue',
            'viaje_agradable_limpio_SeguroTrue',
            'exceso_de_velocidadFalse',
            'habla_por_celularFalse',
            'tanquea_con_pasajerosFalse',
            'omite_señalesFalse',
            'conduce_bruscoFalse',
            'trato_amable_cordialFalse',
            'conduce_con_prudenciaFalse',
            'respeta_las_señalesFalse',
            'vehiculo_limpioFalse',
            'viaje_agradable_limpio_SeguroFalse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
