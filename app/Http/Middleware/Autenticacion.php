<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Session;
use Redirect;

class Autenticacion
{

    public function handle($request, Closure $next)
    {
        if(Auth::check()){

            return $next($request); //return view('admin.viajero.list');   
        }        

        return Redirect::to('/');
    }
}