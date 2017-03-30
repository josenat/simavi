


@extends('layouts.admin') 
 
 
	@section('content') 


	<div class="container">

	<div class="container-form">	


        <a href="/viajero" class="btn btn-default">
            <span class="glyphicon glyphicon-arrow-left"></span> Atrás 
        </a><br><br>


		{!! Form::open(array('url'=>'/viajero', 'method'=>'POST')) !!}

			
	        <div class="modal-content">
	          
	          <div class="modal-header">	             
	              <h4 class="modal-title" id="myModalLabel">Registrar Viajero</h4>
	          </div>

	          <div class="modal-body">                    	               
	                
	                
                        <div class="form-group">
                            {!!Form::label('Cédula:')!!}
                            {!!Form::text('cedula', null, ['class'=>'form-control','placeholder'=>'Ej: 10000000 (sólo números)', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Nombres:')!!}
                            {!!Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Ingrese nombres', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Apellidos:')!!}
                            {!!Form::text('apellido', null, ['class'=>'form-control','placeholder'=>'Ingrese apellidos', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Sexo:')!!}
                            {!!Form::select('sexo', ['M'=>'M', 'F'=>'F'], 'atributos', array('class' => 'form-control', 'required') ) !!}                            
                        </div>

                        <div class="form-group">
                            {!!Form::label('Edad:')!!}
                            {!!Form::text('edad', null, ['class'=>'form-control','placeholder'=>'Ingrese edad', 'required']) !!}
                        </div>                 

                        <div class="form-group">
                            {!!Form::label('Estado Pago:')!!}
                            {!!Form::select('estado_pago', ['Insolvente'=>'Insolvente', 'Solvente'=>'Solvente'], 'atributos', array('class' => 'form-control', 'required') )!!}
                        </div>  

                        <div class="form-group">
                            {!!Form::label('Teléfono:')!!}
                            {!!Form::text('telefono', null, ['class'=>'form-control','placeholder'=>'Ingrese número de teléfono', 'required']) !!}
                        </div>                

                        <div class="form-group">
                            {!!Form::label('Paquete Viaje:')!!} 
                            {{ Form::select('id_paquete', $tipos, null, array('class'=>'form-control', 'required')) }}                                                                                                              
                        </div>                
 
                        <div class="form-group">
                            {!!Form::label('Correo:')!!}
                            {!!Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Ingrese correo electronico', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Fecha Nac:')!!}
                            {!!Form::date('fecha_nac', \Carbon\Carbon::now(), ['class'=>'form-control', 'required']) !!}                    
                        </div>

                        <div class="form-group">
                            {!!Form::label('Permiso de Viaje:')!!}
                            {!!Form::select('permiso', [''=>'', 'Si'=>'Si', 'No'=>'No'], 'atributos', array('class'=>'form-control') )!!}
                        </div>  

                       

	          </div>

	          <div class="modal-footer">

	          		<a href="/viajero" class="btn btn-default"> Atrás </a>

	          		<button type="submit" class="btn btn-default"> Aceptar </button>	
         
	          </div>

	        </div>
       
	    {!! Form::close() !!}


	
	</div>
	</div>
	
	@stop 





{{-- 


					<input type="hidden" id="boton" value="">

					<button type="button" class="btn btn-default" id="cancelar"> 
						Cancelar
					</button>	


					action="{{ action('ViajeroController@create') }}"



{!!Form::text('fecha_nac', null, ['class'=>'form-control','placeholder'=>'Ingrese fecha de nacimiento', 'required'])!!}
--}}