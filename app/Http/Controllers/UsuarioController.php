<?php

namespace App\Http\Controllers;
use App\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = Usuario::join('tercero', 'tercero.idTercero', 'usuario.idTercero')
        ->select('usuario.*' , 'tercero.nombres as idTercero')
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
        $usuario = Usuario::create([

            'idTercero' => $request->idTercero,
            'estado' => $request->estado,
            'codigo' => $request->codigo,
            'clave' => $request->clave

            ]);

         return response()->json($usuario);
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
    public function edit($idUsuario)
    {
        $query= Usuario::find($idUsuario);
        return response()->json($query);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idUsuario)
    {
        $attributes = [
            'estado' => 'estado',
            'codigo' => 'codigo',
            'clave' => 'clave',
        ];

        $usuario = Usuario::find($idUsuario);

        $usuario->update([
            'estado' => $request->estado,
            'codigo' =>$request->codigo,
            'clave' =>$request->clave,

        ]);
        return response()->json($usuario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idUsuario)
    {
        Usuario::destroy($idUsuario);
    }
    //cambiar estado
    public function stateUsuario(Request $request){
        $usuario = Usuario::find($request->idUsuario);
        $usuario->estado = $request->estado;
        $usuario->save();
        return response()->json($usuario);
    }
}
