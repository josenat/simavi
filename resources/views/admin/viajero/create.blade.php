
@extends('layouts.admin')
 
 
	@section('content')


	<div class="container">

	<div class="container-create">	
  
	    @include('alerts.js.exito')	

		<form id="createForm" accept-charset="UTF-8">

	        <input type="hidden" name="_token"  value="{{ csrf_token() }}" id="token">
	        <input type="hidden" name="_method" value="POST">

	        <div class="modal-content">
	          
	          <div class="modal-header">	             
	              <h4 class="modal-title" id="myModalLabel">Crear Viajero</h4>
	          </div>

	          <div class="modal-body">                    	               
	                
	                
	                <div class="form-group">
	                	<small><span class='glyphicon glyphicon-asterisk'></span></small>
	                    <label> Cédula: &nbsp;&nbsp; <small>(Solo Números)</small> </label>
	                    <input type="text" class="form-control" id="cedula" placeholder="Ej: 10000000" required>
	                </div> 

	                <div class="form-group">
	                	<small><span class='glyphicon glyphicon-asterisk'></span></small>
	                    <label> Nombres:</label>
	                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombres" required>
	                </div>  

	                <div class="form-group">
	                	<small><span class='glyphicon glyphicon-asterisk'></span></small>
	                    <label> Apellidos:</label>
	                    <input type="text" class="form-control" id="apellido" placeholder="Ingrese apellidos" required>
	                </div> 

                    <div class="form-group">
                        <small><span class='glyphicon glyphicon-asterisk'></span></small>
                        <label> Sexo:</label>
						<select class="form-control" id="sexo">
      						<option>F</option>
      						<option>M</option>
    					</select>
                        {{--<input type="text" class="form-control" id="sexo" placeholder="Ej: M / F" required>--}}
                    </div>                 

	                <div class="form-group">
	                	<small><span class='glyphicon glyphicon-asterisk'></span></small>
	                    <label> Edad:</label>
	                    <input type="text" class="form-control" id="edad" placeholder="Ingrese edad" required>
	                </div>  

	                <div class="form-group">
	                	<small><span class='glyphicon glyphicon-asterisk'></span></small>
	                    <label>Estado Pago:</label>
	                    <select class="form-control" id="estado_pago">
      						<option>Insolvente</option>
      						<option>Solvente</option>
    					</select>
	                    {{--<input type="text" class="form-control" id="estado_pago" placeholder="Ej: Solvente o Insolvente" required>--}}
	                </div> 	                         

	                <div class="form-group">
	                	<small><span class='glyphicon glyphicon-asterisk'></span></small>
	                    <label> Teléfono: &nbsp;&nbsp; <small>(Solo Números)</small> </label>
	                    <input type="text" class="form-control" id="telefono" placeholder="Ej: 04140000000" required>
	                </div> 

	                <div class="form-group">
	                	<small><span class='glyphicon glyphicon-asterisk'></span></small>
	                    <label> Correo:</label>
	                    <input type="email" class="form-control" id="email" placeholder="Ingrese correo electrónico" required>
	                </div>  

	                <div class="form-group">
	                	<small><span class='glyphicon glyphicon-asterisk'></span></small>
	                    <label> Paquete Viaje:</label>
	                    <input type="text" class="form-control" id="paquete" placeholder="Ej: 1 / 2" required>
	                </div> 		                

	                <div class="form-group">
	                    <label> Fecha Nac: </label>
	                    <input type="date" class="form-control" id="fecha_nac" value="@php echo date("Y-m-d"); @endphp">
	                </div>       

	                <div class="form-group">
	                    <label>Permiso de Viaje:</label>
	                    <select class="form-control" id="permiso">
	                    	<option>  </option>
      						<option>Si</option>
      						<option>No</option>
    					</select>
	                    {{--<input type="text" class="form-control" id="permiso" placeholder="Ej: Si / No">--}}
	                </div>  

	          </div>

	          <div class="modal-footer">

	          		<a href="/viajero" class="btn btn-default"> Atrás </a>

	          		<button type="submit" class="btn btn-default"> Aceptar </button>	
         
	          </div>

	        </div>
       
	    </form>


	
	</div>
	</div>
	
	@stop 

@section('scripts')
<script src="{{ asset('js/viajero/create.js') }}"></script>
@endsection



{{-- 


					<input type="hidden" id="boton" value="">

					<button type="button" class="btn btn-default" id="cancelar"> 
						Cancelar
					</button>	


					action="{{ action('ViajeroController@create') }}"


--}}