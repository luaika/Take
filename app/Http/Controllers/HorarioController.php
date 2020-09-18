<?php

namespace App\Http\Controllers;

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
        //return response()->json(Horario::all()) ;

       $lista = Horario::join('ruta', 'ruta.idRuta', 'horario.idRuta')
        ->select('horario.*' , 'ruta.descripcion as ruta')
        ->get();
        return response()->json($lista);

        //('vehiculo', 'vehiculo.idvehiculo', 'horario.idVehiculo')
        //('horario.*' , 'vehiculo.placa as vehiculo')
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
