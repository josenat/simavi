
@extends('layouts.admin')
 
 
	@section('content')


	<div class="container">

	<div class="container-create">	
  
  		@include('alerts.js.exito')	
	    
		<form id="createForm">

	        <input type="hidden" name="_token"  value="{{ csrf_token() }}" id="token">
	        <input type="hidden" name="_method" value="POST">

	        <div class="modal-content">
	          
	          <div class="modal-header">	             
	              <h4 class="modal-title" id="myModalLabel">Registrar Pago</h4>
	          </div>

	          <div class="modal-body">                    	               
                

	                <div class="form-group">
	                	<small><span class='glyphicon glyphicon-asterisk'></span></small>
	                    <label>Cédula: &nbsp;&nbsp; <small>(Solo Números)</small> </label>
	                    <input type="text" class="form-control" id="cedula" value="{{$cedula}}" placeholder="Ej: 10000000" required>
	                </div> 
					

	                <div class="form-group">
	                	<small><span class='glyphicon glyphicon-asterisk'></span></small>
	                    <label>Monto: &nbsp;&nbsp; <small>(Solo Números)</small> </label>
	                    <input type="text" class="form-control" id="monto" placeholder="Ej: 15000" required>
	                </div> 

	                <div class="form-group">
	                	<small><span class='glyphicon glyphicon-asterisk'></span></small>
	                    <label>Método Pago:</label>
	                    <select class="form-control" id="metodo">
	                    	<option>Transferencia</option>
	                    	<option>Efectivo</option>      					
    					</select>
	                    {{--<input type="text" class="form-control" id="metodo" placeholder="Ej: Efectivo / Transferencia" required>--}}
	                </div>  

	                <div class="form-group">
	                    <label>Fecha Pago:</label>
	                    <input type="date" class="form-control" id="fecha" value="@php echo date("Y-m-d"); @endphp">
	                </div> 

	                <div class="form-group">
	                    <label>Recibo:</label>
	                    <input type="text" class="form-control" id="num_recibo" placeholder="">
	                </div>                   

	                <div class="form-group">
	                    <label>Banco:</label>
	                    <input type="text" class="form-control" id="banco" placeholder="">
	                </div>  

		          </div>

	          <div class="modal-footer">
	       
	          		<a href="/viajero/{{$id}}" class="btn btn-default"> Atrás </a>

	          		<button type="submit" class="btn btn-default" id="btnGuardar"> Aceptar </button>	          			
         
	          </div>

	        </div>
       
	    </form>


	
	</div>
	</div>
	
	@stop 


@section('scripts')
<script src="{{ asset('js/pago/create.js') }}"></script>
@endsection