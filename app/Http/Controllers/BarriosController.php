<?php

namespace App\Http\Controllers;

use App\Barrios;
use Illuminate\Http\Request;

class BarriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Barrios::where([
            ['estado', 1],
        ])->orderBy('nombreBarrio')->get();
        return response()->json($query);
    }

  /*   public function consultaBarrios(Request $request){
        $query = Barrio::where([
            ['estado', 1],
        ])->orderBy('descripcion')->get();
        return response()->json($query);
    } */

   }
