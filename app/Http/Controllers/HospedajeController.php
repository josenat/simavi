<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospedajeController extends Controller
{

    public function __construct(){

        $this->middleware('Autenticacion');
    }

    public function index()
    {
        $hospedajes = Hospedaje::all();
        
        return view('admin.hospedaje.list', compact('hospedajes'));
    }


    public function create()
    {
        return view('admin.hospedaje.create');
    }


    public function store(Request $request)
    {
        if($request->ajax()){                       
            
            if(Hospedaje::create([
                'nombre'     => $request{'nombre'},                
                'telefono'   => $request{'telefono'},
                'direccion'  => $request{'direccion'}            
                ])){

                    return response()->json(['mensaje'=> 'guardado']);                 
            }

       } 
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        // obtener objeto seleccionado
        $hospedaje = Hospedaje::find($id);                   

        // se asume que existe una peticion ajax
        return response()->json($hospedaje->toArray());
    }


    public function update(Request $request, $id)
    {
        // crear objeto
        $hospedaje = new hospedaje;        
        // obtener id del recurso
        $hospedaje = Hospedaje::find($id);      
         
  
        if($request->ajax()){    

            // cargar datos en el objeto
            $hospedaje->fill($request->all()); 
            // guardar
            if($hospedaje->save()){

                return response()->json('Actualización Exitosa'); 
            }
        }
    }


    public function destroy($id)
    {
        // eliminar recurso
        if(Hospedaje::destroy($id)){

            return response()->json(['mensaje' => 'eliminado']);            
        }
    }

}
