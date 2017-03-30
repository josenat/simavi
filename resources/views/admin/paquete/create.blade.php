
@extends('layouts.admin')
 
 
	@section('content')
	

	<div class="container">

	<div class="container-form">	
  

		<a href="/paquete" class="btn btn-default">
			<span class="glyphicon glyphicon-arrow-left"></span> Atrás 
		</a><br><br>


		{!! Form::open(array('url'=>'/paquete', 'method'=>'POST')) !!}
	        
			
	        <div class="modal-content">
	          
	            <div class="modal-header">	             
	              <h4 class="modal-title" id="myModalLabel">Registrar Paquete</h4>
	            </div>

	            <div class="modal-body">                    	               
	                
	                
                    <div class="form-group">
                        {!!Form::label('Tipo:')!!}
                        {!!Form::text('tipo', null, ['class'=>'form-control','placeholder'=>'Ingrese tipo de paquete'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('Costo:')!!}
                        {!!Form::text('costo', null, ['class'=>'form-control','placeholder'=>'Ingrese costo del paquete'])!!}
                    </div>

                    <div class="form-group">
                        {!!Form::label('Descripcion:')!!}
                        {!!Form::text('descripcion', null, ['class'=>'form-control','placeholder'=>'Ingrese descripcion'])!!}
                    </div>

	            </div>

	            <div class="modal-footer">
	          		<a href="/paquete" class="btn btn-default"> Atrás </a>

	          		<button type="submit" class="btn btn-default"> Aceptar </button>	          			
	            </div>

	        </div>
       
	    {!! Form::close() !!}


	
	</div>
	</div>
	
	@stop 

@section('scripts')
<script src="{{ asset('js/script.js') }}"></script>
@endsection