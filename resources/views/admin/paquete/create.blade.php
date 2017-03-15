
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
	              <h4 class="modal-title" id="myModalLabel">Crear Paquete</h4>
	          </div>

	          <div class="modal-body">                    	               
	                
	                
	                <div class="form-group">
	                	<small><span class='glyphicon glyphicon-asterisk'></span></small>
	                    <label> Tipo: </label>
	                    <input type="text" class="form-control" id="tipo" placeholder="Ej: 1" required>
	                </div> 

	                <div class="form-group">
	                	<small><span class='glyphicon glyphicon-asterisk'></span></small>
	                    <label> Costo: &nbsp;&nbsp; <small>(Solo Números)</small> </label> 
	                    <input type="text" class="form-control" id="costo" placeholder="Ej: 25000" required>
	                </div>  

	                <div class="form-group">
	                	<small><span class='glyphicon glyphicon-asterisk'></span></small>
	                    <label> Descripcion: </label>
	                    <input type="text" class="form-control" id="descripcion" placeholder="" required>
	                </div> 

	          </div>

	          <div class="modal-footer">

	          		<a href="/paquete" class="btn btn-default"> Atrás </a>

	          		<button type="submit" class="btn btn-default"> Aceptar </button>	          			
         
	          </div>

	        </div>
       
	    </form>


	
	</div>
	</div>
	
	@stop 

@section('scripts')
<script src="{{ asset('js/paquete/create.js') }}"></script>
@endsection