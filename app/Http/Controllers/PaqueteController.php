<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paquete;
use Redirect; 
use Session;

class PaqueteController extends Controller
{
    
    public function __construct(){

        $this->middleware('auth');
    }



    public function index()
    {
        $paquetes = Paquete::orderBy('tipo')->get();
        
        return view('admin.paquete.list', compact('paquetes'));

        
    }




    public function create()
    {
        return view('admin.paquete.create');
    }




    public function store(Request $request)
    {                    
            
        if(Paquete::create([
            'tipo'         => $request{'tipo'},                
            'costo'        => $request{'costo'},
            'descripcion'  => $request{'descripcion'}            
            ])){

                Session::flash('exito', '¡Registro de paquete exitoso!');                    
        }

        return Redirect::to('/paquete'); 
    }




    public function show($id)
    {
        //
    }




    public function edit($id)
    {
        // obtener objeto seleccionado
        $paquete = Paquete::find($id);                   

       // si el id no corresponde con ningun id de base datos
        if (is_null ($paquete)){
            Abort(404);
        }

        // mostrar vista con los datos a actualizar
        return view('admin.paquete.edit', compact('paquete'));
    }




    public function update(Request $request, $id)
    {    
        // obtener id del recurso
        $paquete = Paquete::find($id);       

        // cargar datos en el objeto
        $paquete->fill($request->all()); 
        // guardar
        if($paquete->save()){

            Session::flash('exito', '¡Actualización de paquete exitosa!');
        }
        
        return Redirect::to('/paquete');
    }




    public function destroy($id)
    {
        // eliminar recurso
        if(Paquete::destroy($id)){

            Session::flash('exito', '¡Eliminación de paquete exitosa!');
        }
        
        return Redirect::to('/paquete');
    }
}
