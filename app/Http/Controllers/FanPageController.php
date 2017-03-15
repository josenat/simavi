<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viajero;
use Excel;


class FanPageController extends Controller
{
    public function __construct(){

    	$this->middleware('Autenticacion');
    }



    public function excel(){

		Excel::create('Simavi', function($excel) {

		    $excel->sheet('Viajeros', function($sheet) {

		    	$viajero = Viajero::all();		    	

		        $sheet->fromArray($viajero);

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
