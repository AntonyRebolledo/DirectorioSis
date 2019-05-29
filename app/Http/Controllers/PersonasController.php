<?php

namespace App\Http\Controllers;

use App\Personas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Personal;
use App\Puesto;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _contruct(){
        $this->middleware('auth');
    }


    public function index()
    {
        $datos= Personal::paginate(10);
        //$puesto = Personal::find(2);
        //dd($puesto->name_puesto);
        return view('Personas.index',['datos'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $puesto = Puesto::all();
        return view('personas.create', compact('puesto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $datosPersonas= $request->except('_token');
        if ($request->hasFile('foto')) {
           $datosPersonas['foto']=$request->file('foto')->store('uploads','public');
        }
      
        $personales = new Personal($datosPersonas);
        $personales->save();
        
        return redirect('personas')->with('Mensaje','Persona agregado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $persona = Personal::findOrFail($id);
        return view('personas.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $datosPersonas= $request->except(['_token','_method']);
        if ($request->hasFile('foto')) {

            $persona = Personal::findOrFail($id);

            Storage::delete('public/'.$persona->foto);

            $datosPersonas['foto']=$request->file('foto')->store('uploads','public');
        }

        Personal::where('id','=',$id)->update($datosPersonas);

        //$persona = Personas::findOrFail($id);
        //return view('personas.edit', compact('persona'));

        return redirect('personas')->with('Mensaje','Persona Modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *va
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Personal::findOrFail($id);

        if(Storage::exists('public/'.$persona->foto)){
            Storage::delete('public/'.$persona->foto);
        }
        Personal::destroy($id);

        return redirect('personas')->with('Mensaje','Persona Eliminada con éxito');;
    }
}