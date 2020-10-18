<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Horario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $lista = \DB::table('horario')
        ->join('vehiculo', 'vehiculo.idvehiculo', '=', 'horario.idVehiculo')
        ->join('ruta', 'ruta.idRuta', '=', 'horario.idRuta')
        ->select('horario.*' , 'ruta.descripcion as ruta','vehiculo.placa as vehiculo')
        ->get();
        return response()->json($lista);
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
        $horario = Horario::create([

            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'idRuta' => $request->idRuta,
            'idVehiculo' => $request->idVehiculo
            ]);

         return response()->json($horario);
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
    public function edit($idHorario)
    {
        $query= Horario::find($idHorario);
        return response()->json($query);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idHorario)
    {
        $attributes = [
            'hora' => 'Hora',
            'fecha' => 'Fecha',
        ];

        $horario = Horario::find($idHorario);

        $horario->update([
            'hora' => $request->hora,
            'fecha' =>$request->fecha,

        ]);
        return response()->json($horario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idHorario)
    {
        Horario::destroy($idHorario);
    }

    //cambiar estado
    public function stateHorario(Request $request){
        $horario = Horario::find($request->idHorario);
        $horario->estado = $request->estado;
        $horario->save();
        return response()->json($horario);

    }
}
