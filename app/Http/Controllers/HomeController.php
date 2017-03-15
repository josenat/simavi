<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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



    public function logout()
    {
        Auth::logout();

        return Redirect::to('/');
    }  

}


