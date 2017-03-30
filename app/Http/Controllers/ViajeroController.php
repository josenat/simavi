<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viajero; 
use App\Pago;
use App\Paquete;
use Redirect; 
use Session;



class ViajeroController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }
    



    public function index(){

        $viajeros = Viajero::orderBy('nombre', 'asc')->paginate(25);
        $orden = "Nombre";

        return view('admin.viajero.list', compact('viajeros','orden'));
    }

    public function byCedula(){

        $viajeros = Viajero::orderBy('cedula', 'asc')->paginate(25);
        $orden = "Cédula";

        return view('admin.viajero.list', compact('viajeros','orden'));
    } 

    public function byPaquete(){

        $viajeros = Viajero::orderBy('id_paquete', 'asc')->paginate(25);
        $orden = "Paquete";

        return view('admin.viajero.list', compact('viajeros','orden'));
    }

    public function byEstado(){

        $viajeros = Viajero::orderBy('estado_pago', 'asc')->paginate(25);
        $orden = "Estado";

        return view('admin.viajero.list', compact('viajeros','orden'));
    }

    public function bySexo(){

        $viajeros = Viajero::orderBy('sexo', 'asc')->paginate(25);
        $orden = "Sexo";

        return view('admin.viajero.list', compact('viajeros','orden'));
    } 

    public function byEdad(){

        $viajeros = Viajero::orderBy('edad', 'asc')->paginate(25);
        $orden = "Edad";

        return view('admin.viajero.list', compact('viajeros','orden'));
    }           




    public function create()
    {
        // obtener objeto
        $paquetes = Paquete::all();    
        // 'tipos' se le reserva la posición 0 para guardar null por defecto 
        $i = 0;
        foreach ($paquetes as $key) {
           $tipos[$i+1] = $paquetes[$i]['tipo'];
           $i++; 
        }

        return view('admin.viajero.create', compact('tipos'));
    }




    public function store(Request $request)
    {

        if(Viajero::create([
            'cedula'        => $request{'cedula'},                
            'nombre'        => $request{'nombre'},
            'apellido'      => $request{'apellido'},
            'sexo'          => $request{'sexo'},
            'edad'          => $request{'edad'},
            'estado_pago'   => $request{'estado_pago'},                
            'telefono'      => $request{'telefono'},
            'id_paquete'    => $request{'id_paquete'},
            'fecha_nac'     => $request{'fecha_nac'},
            'email'         => $request{'email'},
            'permiso'       => $request{'permiso'}
            ])){

                Session::flash('exito', '¡Registro de viajero exitoso!');                 
        }
         
        return Redirect::to('/viajero');      
    }




    public function show($id)
    {   

  
    }




    public function edit($id)
    {
        // obtener objeto seleccionado
        $viajero = Viajero::find($id); 

       // si el id no corresponde con ningun id de base datos
        if (is_null ($viajero)){
            Abort(404);
        }

        return view('admin.viajero.edit', compact('viajero'));
        
    }




    public function update(Request $request, $id)
    {    
        // obtener id del recurso
        $viajero = Viajero::find($id);   

        // cargar datos obtenidos
        $viajero->fill($request->all());

        // guardamos los cambios    
        if($viajero->save()){

            Session::flash('exito', '¡Actualización de viajero exitosa!');      
        }        
        else{
            Session::flash('error', '¡Error de Operación!');
        }

        return Redirect::to('/viajero');
    }




    public function destroy($id)
    {
        // eliminar recurso
        if(Viajero::destroy($id)){

            Session::flash('exito', '¡Eliminación de viajero exitosa!');
        }
        else{
            Session::flash('error', '¡Error de Operación!');
        }

        return Redirect::to('/viajero'); 
    }




    public function setEstadoViajero($id){ 

        // establecemos cambio de estado 
        $viajero = Viajero::find($id);
        // para este método cambiaremos a solvente      
        $viajero->estado_pago = 'Solvente';
        // guardar
        if($viajero->save()){

            return Redirect::to('/viajero/detalles/'.$id);
        }       
      
    }


}




/*



        if(Viajero::where('id', $id)->update([                
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
    
        }




*/