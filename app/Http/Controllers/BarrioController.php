<?php

namespace App\Http\Controllers;

use App\Barrio;
use Illuminate\Http\Request;

class BarrioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Barrio::where([
            ['estado', 1],
        ])->orderBy('descripcion')->get();
        return response()->json($query);
    }

  /*   public function consultaBarrios(Request $request){
        $query = Barrio::where([
            ['estado', 1],
        ])->orderBy('descripcion')->get();
        return response()->json($query);
    } */

   }
