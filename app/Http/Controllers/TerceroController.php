<?php

namespace App\Http\Controllers;

use App\Tercero;
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

        $query = Tercero::where([
            ['estado', 1],
        ])->orderBy('nombres')->get();
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
