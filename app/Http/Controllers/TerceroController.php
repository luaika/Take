<?php

namespace App\Http\Controllers;

use App\Tercero;
use App\Departamento;
use App\Municipio;
use Illuminate\Http\Request;

class TerceroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $lista = \DB::table('tercero')
        ->join('municipio', 'municipio.idMunicipio', '=','tercero.idMunicipio')
        ->select('tercero.*' , 'municipio.descripcion as municipio')
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

    public function departamento()
    {
        $query = Departamento::where([
            ['estado', 1],
        ])->orderBy('descripcion')->get();
        return response()->json($query);
       
    }

    public function municipio($idDepartamento){
        $query = Municipio::where('idDepartamento','=',$idDepartamento)->orderBy('descripcion')->get();
        return response()->json($query);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tercero = Tercero::create([

            'numeroIdentificacion' => $request->numeroIdentificacion,
            'tipoIdentificacion' => $request->tipoIdentificacion,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'razonSocial' => $request->razonSocial,
            'nombreComercial' => $request->nombreComercial,
            'genero' => $request->genero,
            'fechaNacimiento' => $request->fechaNacimiento,
            'telefono' => $request->telefono,
            'celular' => $request->celular,
            'email' => $request->email,
            'direccion' => $request->direccion,
            'idMunicipio' => $request->idMunicipio,
            'foto' => $request->foto,
            'estado' => $request->estado,
            'idUsuarioCrea' => $request->idUsuarioCrea,
            'idUsuarioModifica' => $request->idUsuarioModifica,
            ]);

         return response()->json($tercero);
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
    public function edit($idTercero)
    {
        $lista = \DB::table('tercero')
        ->join('municipio', 'municipio.idMunicipio', '=','tercero.idMunicipio')
        ->join('departamento', 'departamento.idDepartamento', '=','municipio.idDepartamento')
        ->select('tercero.*' , 'municipio.descripcion as municipio','departamento.descripcion as departamento')
        ->where('idTercero',$idTercero)
        ->get();
        return response()->json($lista);
        
        /* $query= Tercero::find($idTercero);
        return response()->json($query); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idTercero)
    {
        $tercero=Tercero::find($idTercero);

        $tercero->update([
            'numeroIdentificacion' => $request->numeroIdentificacion,
            'tipoIdentificacion' => $request->tipoIdentificacion,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'razonSocial' => $request->razonSocial,
            'nombreComercial' => $request->nombreComercial,
            'genero' => $request->genero,
            'fechaNacimiento' => $request->fechaNacimiento,
            'telefono' => $request->telefono,
            'celular' => $request->celular,
            'email' => $request->email,
            'direccion' => $request->direccion,
            'idMunicipio' => $request->idMunicipio,
            'foto' => $request->foto,
            'estado' => $request->estado,
            'idUsuarioCrea' => $request->idUsuarioCrea,
            'idUsuarioModifica' => $request->idUsuarioModifica,
        ]);
        return response()->json($tercero);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idTercero)
    {
        Tercero::destroy($idTercero);
    }


    //cambiar estado
    public function stateTerceros(Request $request){
        $tercero = Tercero::find($request->idTercero);
        $tercero->estado = $request->estado;
        $tercero->save();
        return response()->json($tercero);
    }
}
