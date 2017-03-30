
@extends('layouts.admin')
 
 
	@section('content')


	<div class="container">

	<div class="container-form">	
  

        <a href="/pago" class="btn btn-default">
            <span class="glyphicon glyphicon-arrow-left"></span> Atrás 
        </a><br><br>


		{!! Form::open(array('url'=>'/pago', 'method'=>'POST')) !!}

			
	        <div class="modal-content">
	          
	          <div class="modal-header">	             
	              <h4 class="modal-title" id="myModalLabel">Registrar Pago</h4>
	          </div>

	          <div class="modal-body">     
	                
                        <div class="form-group">
                            {!!Form::label('Cédula:')!!}
                            {!!Form::text('cedula', null, ['class'=>'form-control cedula','placeholder'=>'Ej: 10000000 (sólo números)', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Monto:')!!}
                            {!!Form::number('monto', null, ['class'=>'form-control','placeholder'=>'Ej: 25000 (sólo números)', 'required']) !!}
                        </div>

                        <div class="form-group">
                            {!!Form::label('Método Pago:')!!}
                            {!!Form::select('metodo', ['Transferencia'=>'Transferencia', 'Efectivo'=>'Efectivo'], 'atributos', array('class'=>'form-control', 'required') )!!}
                        </div> 

                        <div class="form-group">
                            {!!Form::label('Fecha:')!!}
                            {!!Form::date('fecha', \Carbon\Carbon::now(), ['class'=>'form-control', 'required']) !!}                    
                        </div>

                        <div class="form-group">
                            {!!Form::label('Recibo Nro:')!!}
                            {!!Form::text('num_recibo', null, ['class'=>'form-control','placeholder'=>'Ingrese número de recibo']) !!}
                        </div>                 

                        <div class="form-group">
                            {!!Form::label('Banco:')!!}
                            {!!Form::text('banco', null, ['class'=>'form-control','placeholder'=>'Ingrese nombre del banco']) !!}
                        </div>                
                                  

	          </div>

	          <div class="modal-footer">

	          		<a href="/pago" class="btn btn-default"> Atrás </a>

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

{{--

--}}