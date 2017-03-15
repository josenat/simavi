<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viajero; 
use App\Pago;
use Redirect; 


class ViajeroController extends Controller
{

    public function __construct(){

        $this->middleware('Autenticacion');
    }
    


    public function index()
    {

        
        
        $viajeros = Viajero::orderBy('nombre', 'asc')->paginate(25);

        return view('admin.viajero.list', compact('viajeros'));



        //$viajeros = Viajero::paginate(25);
        //return View::make('vista', array('viajeros' => $viajeros, 'users' => $users));
    }



    public function create()
    {
        return view('admin.viajero.create');
    }



    public function store(Request $request)
    {  
        if($request->ajax()){                       
            
            if(Viajero::create([
                'cedula'        => $request{'cedula'},                
                'nombre'        => $request{'nombre'},
                'apellido'      => $request{'apellido'},
                'sexo'          => $request{'sexo'},
                'edad'          => $request{'edad'},
                'estado_pago'   => $request{'estado_pago'},                
                'telefono'      => $request{'telefono'},
                'id_paquete'    => $request{'paquete'},
                'fecha_nac'     => $request{'fecha_nac'},
                'email'         => $request{'email'},
                'permiso'       => $request{'permiso'}
                ])){

                    return response()->json(['mensaje'=> 'guardado']);                 
            }

       } 
               
    }



    public function show($id)
    {
        // obtener objeto seleccionado
        $viajero = Viajero::find($id); 

        // obtener pagos realizados por el viajero
        $pagos = Pago::where('cedula', $viajero->cedula)->orderBy('fecha', 'asc')->get(); 

        // obtener primer nombre y apellido del viajero
        $nombre   = explode(" ", $viajero->nombre); 
        $apellido = explode(" ", $viajero->apellido); 
        $titulo = $nombre[0] ." ". $apellido[0];


        return view('admin.viajero.detalles', compact('viajero', 'pagos', 'titulo'));
    }



    public function edit($id)
    {
        // obtener objeto seleccionado
        $viajero = Viajero::find($id);                   

        // se asume que existe una peticion ajax
        return response()->json($viajero->toArray());
        
    }



    public function update($id, Request $request)
    {    

        // crear objeto
        $viajero = new Viajero;        
        // obtener id del recurso
        $viajero = Viajero::find($id);      
         
  
        if($request->ajax()){    

            // cargar datos en el objeto
            $viajero->fill($request->all()); 
            // guardar
            if($viajero->save()){

                return response()->json('Actualización Exitosa'); 
            }
        }

        
    }



    public function destroy($id)
    {
        // eliminar recurso
        if(Viajero::destroy($id)){

            return response()->json(['mensaje' => 'eliminado']);            
        }
    }



    public function setEstadoViajero($id){ 

        // establecemos cambio de estado 
        $viajero = Viajero::find($id);
        // para este método cambiaremos a solvente      
        $viajero->estado_pago = 'Solvente';
        // guardar
        if($viajero->save()){

            return Redirect::to('/viajero/'.$id);
        }       
      
    }










}








/*            
            if(Viajero::create([
                'cedula'      => $request{'cedula'},                
                'nombre'      => $request{'nombre'},
                'apellido'    => $request{'apellido'},
                'edad'        => $request{'edad'},
                'estado_pago' => $request{'estado_pago'},                
                'telefono'    => $request{'telefono'},
                'email'       => $request{'email'},
                'permiso'     => $request{'permiso'}
                ])){

                    return response()->json(['mensaje'=> 'agregado']);                 
            }
*/


/*
            $viajero->cedula      = $request->cedula;
            $viajero->nombre      = $request->nombre; 
            $viajero->apellido    = $request->apellido;
            $viajero->edad        = $request->edad;
            $viajero->estado_pago = $request->estado_pago;
            $viajero->telefono    = $request->telefono;
            $viajero->email       = $request->email;
            $viajero->permiso     = $request->permiso;  */