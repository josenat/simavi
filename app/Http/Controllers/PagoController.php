<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pago;
use Auth;

class PagoController extends Controller
{

    public function __construct(){

        $this->middleware('Autenticacion');
    }
        

    public function index()
    {
        // obtener objeto por orden ascendente de fecha
        $pagos = Pago::orderBy('fecha', 'asc')->get();

        // calcular monto total de pagos
        $total = 0;
        foreach ($pagos as $key) {
            $total = $total + $key->monto;
        }

        
        return view('admin.pago.list', compact('pagos', 'total'));
    }


    public function create(Request $request) 
    {
        return view('admin.pago.create');
    }


    public function store(Request $request)
    {
        if($request->ajax()){                       
    
            if(Pago::create([
                'cedula'     => $request{'cedula'},                
                'monto'      => $request{'monto'},
                'metodo'     => $request{'metodo'},
                'fecha'      => $request{'fecha'},
                'num_recibo' => $request{'num_recibo'},                
                'banco'      => $request{'banco'},
                'admin'      => Auth::user()->name

                ])){

                    return response()->json(['mensaje'=> 'guardado']);                 
            }
        } 
      
    }


    public function show(Request $request, $id)
    {
        //
          
    }


    public function edit($id)
    {
        // obtener objeto seleccionado
        $pago = Pago::find($id);                   

        // se asume que existe una peticion ajax
        return response()->json($pago->toArray());
    }


    public function update(Request $request, $id)
    {
        // crear objeto
        $pago = new Pago;        
        // obtener id del recurso
        $pago = Pago::find($id);      
         
  
        if($request->ajax()){    

            if(Pago::where('id', $pago->id)->update([                
                'monto'      => $request{'monto'},
                'metodo'     => $request{'metodo'},
                'fecha'      => $request{'fecha'},
                'num_recibo' => $request{'num_recibo'},                
                'banco'      => $request{'banco'}
                ])){

                    return response()->json(['mensaje'=> 'guardado']);                 
            }
        }
    }


    public function destroy($id)
    {
        // eliminar recurso
        if(Pago::destroy($id)){

            return response()->json(['mensaje' => 'eliminado']);            
        }
    }





    public function createByCedula($cedula, $id)
    {
        // utilizaremos este método para registrar un pago a partir de la CI  

        return view('admin.pago.createByCedula', compact('cedula', 'id'));
    }


}
