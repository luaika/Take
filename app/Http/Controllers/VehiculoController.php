<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\Vehiculo;
=======

use App\Vehiculo;
use App\Http\Controllers\Controller;
>>>>>>> pb/master
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return response()->json(Vehiculo::all()) ;
=======
        $query = Vehiculo::where([
            ['estado', 1],
        ])->orderBy('placa')->get();
        return response()->json($query);
>>>>>>> pb/master
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
<<<<<<< HEAD
    
=======
>>>>>>> pb/master

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $vehiculo = Vehiculo::create([
            'placa'=>$request->placa,
            'numeroInterno'=>$request->numeroInterno,
            'idVehiculoMatricula'=>$request->idVehiculoMatricula,
            'idServicio'=>$request->idServicio,
            'idClase'=>$request->idClase,
            'idMarca'=>$request->idMarca,
            'idColor'=>$request->idColor,
            'idCarroceria'=>$request->idCarroceria,
            'idCombustible'=>$request->idCombustible,
            'linea'=>$request->linea,
            'modelo'=>$request->modelo,
            'numeroSerie'=>$request->numeroSerie,
            'numeroChasis'=>$request->numeroChasis,
            'numeroMotor'=>$request->numeroMotor,
            'numeroPuertas'=>$request->numeroPuertas,
            'numeroPasajeros'=>$request->numeroPasajeros,
            'observaciones'=>$request->observaciones,
            'estado'=>$request->estado,
            'idUsuarioCrea'=>$request->idUsuarioCrea,
            'idUsuarioModifica'=>$request->idUsuarioModifica,
        ]);
        return response()->json($vehiculo);
=======
        //
>>>>>>> pb/master
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD
=======
        //
>>>>>>> pb/master
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
