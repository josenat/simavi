<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viajero;
use App\Pago;
use App\Paquete;
use Excel;


class FanPageController extends Controller
{
    public function __construct(){

    	$this->middleware('auth');
    }



    public function excel(){

		Excel::create('Simavi', function($excel) {

		    $excel->sheet('Viajeros', function($sheet) {

		    	$viajero = Viajero::all();		    	

		        $sheet->fromArray($viajero);

		    });

		    $excel->sheet('Pagos', function($sheet) {

		    	$pago = Pago::all();		    	

		        $sheet->fromArray($pago);

		    });

		    $excel->sheet('Paquetes', function($sheet) {

		    	$paquete = Paquete::all();		    	

		        $sheet->fromArray($paquete);

		    });		    		    

		})->export('xls');    	
    }



    public function oneExcel($id){

		Excel::create('Simavi', function($excel) use($id) {

		    $excel->sheet('Viajeros', function($sheet) use($id) {

		    	$viajero = Viajero::all();		    	

		        $sheet->fromArray($viajero);

		    });	    		    

		})->export('xls');    	
    }    

}
