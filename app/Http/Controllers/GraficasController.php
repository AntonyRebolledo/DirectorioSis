<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Personal;

class GraficasController extends Controller
{
    public function index(Request $request){
        $fecha = $request->input('date');
        $areas = Personal::join('puestos','puestos.id','=','personal.puesto_id')->select('puestos.puesto_personal as puesto',
        DB::raw('count(puesto_id) as total'))->WhereDate('personal.created_at',$fecha)->groupBy('puesto_id','puesto_personal')->get();
        return view('grafica.index',compact('areas'));
    
    }

    public function VerGeneral(){

        $areas = Personal::join('puestos','puestos.id','=','personal.puesto_id')->select('puestos.puesto_personal as puesto',
        DB::raw('count(puesto_id) as total'))->groupBy('puesto_id','puesto_personal')->get();

        return view('grafica.general',compact('areas')); 
    }
}
