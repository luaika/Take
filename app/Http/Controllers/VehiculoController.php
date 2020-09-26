<?php

namespace App\Http\Controllers;
use App\Vehiculo;
use App\Vehiculoruta;

use App\Http\Controllers\Controller;
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
        $query = Vehiculo::orderBy('placa')->get();
        return response()->json($query);
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
    }


   public function vehiculoRuta(Request $request){
    $vehiculoRuta = Vehiculoruta::create([
        'idVehiculo'=>$request->idVehiculo,
        'idRuta'=>$request->idRuta,
        'observaciones'=>$request->observaciones,
        'estado'=>$request->estado,
        'idUsuarioCrea'=>$request->idUsuarioCrea,
        'idUsuarioModifica'=>$request->idUsuarioModifica
   ]);
    return response()->json($vehiculoRuta);
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idVehiculo)
    {
        $query = \DB::table('vehiculo')
            ->join('servicio', 'vehiculo.idServicio', '=', 'servicio.idServicio')
            ->join('clase', 'vehiculo.idClase', '=', 'clase.idClase')
            ->join('marca', 'vehiculo.idMarca', '=', 'marca.idMarca')
            ->join('color', 'vehiculo.idColor', '=', 'color.idcolor')
            ->join('carroceria', 'vehiculo.idCarroceria', '=', 'carroceria.idCarroceria')
            ->join('combustible', 'vehiculo.idCombustible', '=', 'combustible.idCombustible')
            ->select('vehiculo.*','servicio.descripcionServicio','clase.descripcionClase',
            'marca.descripcionMarca','color.descripcionColor','carroceria.descripcionCarroceria',
            'combustible.descripcionCombustible')
            ->where('idVehiculo',$idVehiculo)
            ->get();
       // $query = Vehiculo::orderBy('placa')->get();
        return response()->json($query);
       /*  $vehiculo = Vehiculo::find($idVehiculo);
        return response()->json($vehiculo); */
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
    public function destroy($idVehiculo)
    {
        Vehiculo::destroy($idVehiculo);
    }

    //cambiar estado
    public function stateVehiculo(Request $request){
        $vehiculo = Vehiculo::find($request->idVehiculo);
        $vehiculo->estado = $request->estado;
        $vehiculo->save();
        return response()->json($vehiculo);
    }
}
