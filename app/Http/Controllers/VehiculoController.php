<?php

namespace App\Http\Controllers;
use App\Vehiculo;
use App\Vehiculoruta;
use App\Vehiculopoliza;
use App\Vehiculooperacion;
use App\Vehiculortm;
use App\Vehiculotercero;
use App\VehiculoMatricula;

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

    //insertar ruta
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
   //insertar matricula
   public function vehiculoMatricula(Request $request){
    $vehiculomatricula = vehiculomatricula::create([
        'idVehiculo'=>$request->idVehiculo,
        'idTercero'=>$request->idTercero,
        'observaciones'=>$request->observaciones,
        'estado'=>$request->estado,
        'numeroLicenciaTransito'=>$request->numeroLicenciaTransito,
        'tipoRegistro'=>$request->tipoRegistro,
        'fechaRegistro'=>$request->fechaRegistro,
        'idUsuarioCrea'=>$request->idUsuarioCrea,
        'idUsuarioModifica'=>$request->idUsuarioModifica
        ]);
    return response()->json($vehiculomatricula);
   }


   //insertar ruta
   public function vehiculoPoliza(Request $request){
    $vehiculoPoliza = Vehiculopoliza::create([
        'idVehiculo'=>$request->idVehiculo,
        'idTercero'=>$request->idTercero,
        'idPoliza'=>$request->idPoliza,
        'numeroPoliza'=>$request->numeroPoliza,
        'estado'=>$request->estado,
        'fechaExpedicion'=>$request->fechaExpedicion,
        'observaciones'=>$request->observaciones,
        'fechaVigenciaInicio'=>$request->fechaVigenciaInicio,
        'fechaVegenciaFin'=>$request->fechaVegenciaFin,
        'idUsuarioCrea'=>$request->idUsuarioCrea,
        'idUsuarioModifica'=>$request->idUsuarioModifica
   ]);
    return response()->json($vehiculoPoliza);
   }

   //insertar operacion
   public function vehiculoOperacion(Request $request){
    $vehiculoOperacion = Vehiculooperacion::create([
        'idVehiculo'=>$request->idVehiculo,
        'idTercero'=>$request->idTercero,
        'numeroTarjetaOperacion'=>$request->numeroTarjetaOperacion,
        'fechaExpedicion'=>$request->fechaExpedicion,
        'estado'=>$request->estado,
        'fechaExpedicion'=>$request->fechaExpedicion,
        'observaciones'=>$request->observaciones,
        'fechaVigenciaInicia'=>$request->fechaVigenciaInicia,
        'fechaVigenciaFin'=>$request->fechaVigenciaFin,
        'idUsuarioCrea'=>$request->idUsuarioCrea,
        'idUsuarioModifica'=>$request->idUsuarioModifica
   ]);
    return response()->json($vehiculoOperacion);
   }

    //insertar rtm
    public function vehiculoRtm(Request $request){
        $vehiculoRtm = Vehiculortm::create([
            'idVehiculo'=>$request->idVehiculo,
            'idTercero'=>$request->idTercero,
            'numeroCertificado'=>$request->numeroCertificado,
            'fechaExpedicion'=>$request->fechaExpedicion,
            'estado'=>$request->estado,
            'fechaExpedicion'=>$request->fechaExpedicion,
            'observaciones'=>$request->observaciones,
            'fechaVigenciaInicia'=>$request->fechaVigenciaInicia,
            'fechaVigenciaFin'=>$request->fechaVigenciaFin,
            'idUsuarioCrea'=>$request->idUsuarioCrea,
            'idUsuarioModifica'=>$request->idUsuarioModifica
       ]);
        return response()->json($vehiculoRtm);
       }

       //insertar tercero
        public function vehiculoTercero(Request $request){
            $vehiculoTercero = vehiculotercero::create([
                'idVehiculo'=>$request->idVehiculo,
                'idTercero'=>$request->idTercero,
                'estado'=>$request->estado,
                'observaciones'=>$request->observaciones,
                'fechaInicia'=>$request->fechaInicia,
                'fechaFin'=>$request->fechaFin,
                'idUsuarioCrea'=>$request->idUsuarioCrea,
                'idUsuarioModifica'=>$request->idUsuarioModifica
        ]);
            return response()->json($vehiculoTercero);
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
    public function verRutas($idVehiculo)
    {
        $query = Vehiculoruta::join('ruta', 'ruta.idRuta', 'vehiculoruta.idRuta')
            ->select('vehiculoruta.*' , 'ruta.descripcion as nombreRuta')
            ->where('idVehiculo',$idVehiculo)
            ->get();
        return response()->json($query);
    }

    public function verMatricula($idVehiculo)
    {
        $query = VehiculoMatricula::join('tercero', 'tercero.idTercero', 'vehiculomatricula.idTercero')
            ->select('vehiculomatricula.*' , 'tercero.numeroIdentificacion')
            ->where('idVehiculo',$idVehiculo)
            ->get();
        return response()->json($query);
    }


    //ver polizas
    public function verPolizas($idVehiculo)
    {
        $query = \DB::table('vehiculopoliza')
            ->join('poliza', 'poliza.idPoliza','=', 'vehiculopoliza.idPoliza')
            ->join('tercero', 'tercero.idTercero','=', 'vehiculopoliza.idTercero')
            ->select('vehiculopoliza.*' , 'poliza.descripcion as nombrePoliza','tercero.numeroIdentificacion')
            ->where('idVehiculo','=',$idVehiculo)
            ->get();
        return response()->json($query);
    }

   //ver operaciones
   public function verOperaciones($idVehiculo)
   {
       $query = \DB::table('vehiculooperacion')
           ->join('tercero', 'tercero.idTercero','=', 'vehiculooperacion.idTercero')
           ->select('vehiculooperacion.*' , 'tercero.numeroIdentificacion')
           ->where('idVehiculo',$idVehiculo)
           ->get();
       return response()->json($query);
   }

   //ver rtm
   public function verRtm($idVehiculo)
   {
       $query = \DB::table('vehiculortm')
           ->join('tercero', 'tercero.idTercero','=', 'vehiculortm.idTercero')
           ->select('vehiculortm.*' , 'tercero.numeroIdentificacion')
           ->where('idVehiculo',$idVehiculo)
           ->get();
       return response()->json($query);
   }

   //ver  tercero
   public function verTerceros($idVehiculo)
   {
       $query = \DB::table('vehiculotercero')
           ->join('tercero', 'tercero.idTercero','=', 'vehiculotercero.idTercero')
           ->select('vehiculotercero.*' , 'tercero.numeroIdentificacion')
           ->where('idVehiculo',$idVehiculo)
           ->get();
       return response()->json($query);
   }


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
        return response()->json($query);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idVehiculo)
    {
        $vehiculo=Vehiculo::find($idVehiculo);

        $vehiculo->update([
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

    //eliminar ruta de vehiculo
    public function destroyRuta($idVehiculo)
    {
        Vehiculoruta::destroy($idVehiculo);
    }

    //eliminar poliza de vehiculo
    public function destroyPoliza($idVehiculo)
    {
        Vehiculopoliza::destroy($idVehiculo);
    }

    //eliminar operacion de vehiculo
    public function destroyOperacion($idVehiculo)
    {
        Vehiculooperacion::destroy($idVehiculo);
    }

     //eliminar rtm de vehiculo
     public function destroyRtm($idVehiculo)
     {
         Vehiculortm::destroy($idVehiculo);
     }

     //eliminar tercero de vehiculo
     public function destroyTercero($idVehiculo)
     {
         Vehiculotercero::destroy($idVehiculo);
     }

     //eliminar matricula de vehiculo
     public function destroyMatricula($idVehiculo)
     {
        VehiculoMatricula::destroy($idVehiculo);
     }


    //cambiar estado
    public function stateVehiculo(Request $request){
        $vehiculo = Vehiculo::find($request->idVehiculo);
        $vehiculo->estado = $request->estado;
        $vehiculo->save();
        return response()->json($vehiculo);
    }
}
