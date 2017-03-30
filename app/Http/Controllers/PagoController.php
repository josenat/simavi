<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pago;
use App\Viajero;
use Redirect; 
use Session; 
use Auth;

class PagoController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

        


    public function index()
    {
        // obtener objeto por orden ascendente de fecha
        $pagos = Pago::orderBy('fecha', 'asc')->get();
        // obtener monto total de pagos
        $total = $this->calcularTotal();
        // obtener criterio de orden
        $orden = "Fecha";

        return view('admin.pago.list', compact('pagos','total','orden'));
    }

    public function byCedula(){

        $pagos = Pago::orderBy('cedula', 'asc')->paginate(25);
        // obtener monto total de pagos
        $total = $this->calcularTotal();
        // obtener criterio de orden   
        $orden = "Cédula";

        return view('admin.pago.list', compact('pagos','total','orden'));
    }

    public function byDescripcion(){

        $pagos = Pago::orderBy('descripcion', 'asc')->paginate(25);
        // obtener monto total de pagos
        $total = $this->calcularTotal();
        // obtener criterio de orden    
        $orden = "Descripción";

        return view('admin.pago.list', compact('pagos','total','orden'));
    } 

    public function byMonto(){

        $pagos = Pago::orderBy('monto', 'asc')->paginate(25);
        // obtener monto total de pagos
        $total = $this->calcularTotal();
        // obtener criterio de orden     
        $orden = "Monto";

        return view('admin.pago.list', compact('pagos','total','orden'));
    }   

    public function byMetodo(){

        $pagos = Pago::orderBy('metodo', 'asc')->paginate(25);
        // obtener monto total de pagos
        $total = $this->calcularTotal();
        // obtener criterio de orden  
        $orden = "Método";

        return view('admin.pago.list', compact('pagos','total','orden'));
    }       




    public function create(Request $request) 
    {
        return view('admin.pago.create');
    }


 

    public function store(Request $request)
    {   
        $viajero = Viajero::where('cedula', $request{'cedula'})->first();         
                     
        if($viajero == NULL){

            Session::flash('error', '¡Viajero no existe, debe registrarlo!' );

            return Redirect::to('/pago');             
        }

        $nombre      = explode(" ", $viajero->nombre); 
        $apellido    = explode(" ", $viajero->apellido); 
        $descripcion = $nombre[0] ." ". $apellido[0];
            

        if(Pago::create([
            'cedula'      => $request{'cedula'},                
            'monto'       => $request{'monto'},
            'metodo'      => $request{'metodo'},
            'fecha'       => $request{'fecha'},
            'num_recibo'  => $request{'num_recibo'},                
            'banco'       => $request{'banco'},
            'descripcion' => $descripcion,
            'admin'       => Auth::user()->name,
            'id_viajero'  => $viajero->id

            ])){

                Session::flash('exito', '¡Registro de pago exitoso!');                    
        }
        else{
            Session::flash('error', '¡Error de Operación!');
        }

        return Redirect::to('/viajero/detalles/'.$viajero->id); 
    }




    public function show(Request $request, $id)
    {
        //
          
    }


    public function edit($id)
    {
        // obtener objeto seleccionado
        $pago = Pago::find($id);                   

       // si el id no corresponde con ningun id de base datos
        if (is_null ($pago)){
            Abort(404);
        }

        // mostrar vista con los datos a actualizar
        return view('admin.pago.edit', compact('pago'));
    }




    public function update(Request $request, $id)
    {
        // obtener el recurso pago
        $pago = Pago::find($id);     

        // obtener el id del viajero
        $id_viajero =  $pago->id_viajero;         

        if(Pago::where('id', $pago->id)->update([                
            'monto'      => $request{'monto'},
            'metodo'     => $request{'metodo'},
            'fecha'      => $request{'fecha'},
            'num_recibo' => $request{'num_recibo'},                
            'banco'      => $request{'banco'}
            ])){

                Session::flash('exito', '¡Actualización de pago exitosa!');
        }
        else{
            Session::flash('error', '¡Error de Operación!');
        }
        
        return Redirect::to('/viajero/detalles/'.$id_viajero);
    }




    public function destroy($id)
    {
        // obtener el recurso pago
        $pago = Pago::find($id);   

        // obtener el id del viajero
        $id_viajero =  $pago->id_viajero;

        // eliminar recurso
        if(Pago::destroy($id)){

            Session::flash('exito', '¡Eliminación de pago exitosa!');
        }
        else{
            Session::flash('error', '¡Error de Operación!');
        }
        
        return Redirect::to('/viajero/detalles/'.$id_viajero);
    }




 
    public function createByCedula($cedula, $id)
    {
        // utilizaremos este método para registrar un pago a partir de la CI  

        return view('admin.pago.createByCedula', compact('cedula', 'id'));
    }




    public function calcularTotal(){

        // obtener objeto  
        $pagos = Pago::all();
        // calcular monto total de pagos
        $total = 0;
        foreach ($pagos as $key) {
            $total = $total + $key->monto;
        } 

        return $total;       
    }



}
