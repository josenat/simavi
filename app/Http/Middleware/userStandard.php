<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;

class userStandard
{

    public function handle($request, Closure $next)
    {        
        $userCurrent = \Auth::user();

        if($userCurrent->tipo != 2){

        	Session::flash("Esta seccion es solo visible para el usuario estandard <br/> usted aun no ha sido asignado como usuario standard , consulte al administrador del sistema");
            
            return Redirect('/');
        }

        return $next($request);
    }
}
