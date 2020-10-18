<?php

namespace App\Http\Controllers;

use App\Ruta;
use App\Barrio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    switch($_GET['Q']){

        case 0:
            $lista = Ruta::join('barrio', 'barrio.idBarrio', 'ruta.idBarrioInicia')
            ->select('ruta.*' , 'barrio.nombreBarrio as barrio_inicia')
            ->get();
            return response()->json($lista);

        case 1:
            $query = Ruta::where([
            ['estado', 1],
            ])->get();
            return response()->json($query);

        case 2:
            $btermina = Barrio::join('ruta', 'ruta.idBarrioTermina', 'barrio.idBarrio')
            ->select('barrio.nombreBarrio' , 'ruta.descripcion','barrio.nombreBarrio as barrio_termina')
            ->get();
            return response()->json($btermina);
    }

      //orderBy('descripcion')

    }

    /**
     * Show the form for creating a new resource.s
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
        $ruta = Ruta::create([

            'codigo'=>$request->codigo,
            'descripcion'=>$request->descripcion,
            'idBarrioInicia'=>$request->idBarrioInicia,
            'idBarrioTermina'=>$request->idBarrioTermina,
            'estado'=>$request->estado,
            'recorridoRuta'=>$request->recorridoRuta,
            'idUsuarioModifica'=>$request->idUsuarioModifica,
            'idUsuarioCrea'=>$request->idUsuarioCrea
        ]);

        return response()->json($ruta);
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
    public function edit($idRuta)
    {
        $query= Ruta::find($idRuta);
        return response()->json($query);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idRuta)
    {

        $attributes = [
            'codigo' => 'Código',
            'descripcion' => 'Nombre',
            'estado' => 'Estado',
        ];

        $ruta = Ruta::find($idRuta);

        $ruta->update([
            'codigo' => $request->codigo,
            'descripcion' =>$request->descripcion,
            'estado' =>  $request->estado,

        ]);
        return response()->json($ruta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idRuta)
    {
        Ruta::destroy($idRuta);
    }

    //cambiar estado
    public function stateRuta(Request $request){
        $ruta = Ruta::find($request->idRuta);
        $ruta->estado = $request->estado;
        $ruta->save();
        return response()->json($ruta);
    }
}
