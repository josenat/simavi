<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paquete;

class PaqueteController extends Controller
{
    
    public function __construct(){

        $this->middleware('Autenticacion');
    }


    public function index()
    {
        $paquetes = Paquete::all();
        
        return view('admin.paquete.list', compact('paquetes'));
    }


    public function create()
    {
        return view('admin.paquete.create');
    }


    public function store(Request $request)
    {
        if($request->ajax()){                       
            
            if(Paquete::create([
                'tipo'         => $request{'tipo'},                
                'costo'        => $request{'costo'},
                'descripcion'  => $request{'descripcion'}            
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
        $paquete = Paquete::find($id);                   

        // se asume que existe una peticion ajax
        return response()->json($paquete->toArray());
    }


    public function update(Request $request, $id)
    {
        // crear objeto
        $paquete = new Paquete;        
        // obtener id del recurso
        $paquete = Paquete::find($id);      
         
  
        if($request->ajax()){    

            // cargar datos en el objeto
            $paquete->fill($request->all()); 
            // guardar
            if($paquete->save()){

                return response()->json('Actualización Exitosa'); 
            }
        }
    }


    public function destroy($id)
    {
        // eliminar recurso
        if(Paquete::destroy($id)){

            return response()->json(['mensaje' => 'eliminado']);            
        }
    }
}
