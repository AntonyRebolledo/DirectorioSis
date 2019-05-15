<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    
    public function _contruct(){
        $this->middleware('auth');
    }

    public function generar(){
       /*$Personas = \DB::table('personal')->select(['id','nombre', 'apellido_paterno','apellido_materno','correo','cargo','direccion','telefono','foto','cumpleaños', 'celular','sec_part_nombre','sec_part_telefono','sec_part_correo']) */
       $Personas = \DB::table('personal')->where('puesto_id','1')
        ->get();
        $Personas2 = \DB::table('personal')->where('puesto_id','2')
        ->get();
        $Personas3 = \DB::table('personal')->where('puesto_id','3')
        ->get();
        $Personas4 = \DB::table('personal')->where('puesto_id','4')
        ->get();
        $Personas5 = \DB::table('personal')->where('puesto_id','5')
        ->get();
        $Personas6 = \DB::table('personal')->where('puesto_id','6')
        ->get();
        $Personas7 = \DB::table('personal')->where('puesto_id','7')
        ->get();
        $Personas8 = \DB::table('personal')->where('puesto_id','8')
        ->get();
        $view = \View::make('reporte', compact('Personas','Personas2','Personas3','Personas4','Personas5','Personas6','Personas7','Personas8'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('informe');

    } 

}
