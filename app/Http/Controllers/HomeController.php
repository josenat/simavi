<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viajero;
use App\Pago;
use Auth;
use Session;
use Redirect;

class HomeController extends Controller
{

    public function __construct()
    {
            
    }


    public function index() 
    {
        if (Auth::check()) {

            return Redirect::to('/viajero'); 
        }

        return view('auth.login');
    }


    public function store(Request $request)
    {
       
        if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){

       
            return Redirect::to('/viajero'); 
        }

        Session::flash('error', '¡Correo electrónico o contraseña incorrecta!');

        return Redirect::to('/');
       
        
    }



    public function showDetalles($id){ // funcion mostrar operaciones y detalles del viajero

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
  



    public function register(){

        Auth::logout();

        return Redirect::to('/register');
    }



    public function logout()
    {
        Auth::logout();

        return Redirect::to('/');
    }  

}