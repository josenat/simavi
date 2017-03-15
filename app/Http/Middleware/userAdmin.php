<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Redirect;

class userAdmin
{

    public function handle($request, Closure $next)
    {

        $userCurrent = \Auth::user();

        if($userCurrent->tipo != 1){
            
            Session::flash('error','No tiene suficientes privilegios para acceder a esta seccion');
            
            return Redirect('/');
        }

        return $next($request);
    }
}
