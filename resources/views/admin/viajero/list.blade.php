
@extends('layouts.admin')

	@section('content')	 

	
	<div class="list">	

		<div class="container">
 
		<div class="container-list">

			@include('alerts.js.exito')	
			@include('admin.viajero.modal')		


			
								
			<div class="panel panel-default">
  				<div class="panel-heading text-center">
  					<h3><strong>Lista de Viajeros</strong></h3>
  				</div>
			</div>

			<br>
				

			<a href="{{ url('/viajero/create') }}" class="btn btn-default">
				<span class="glyphicon glyphicon-plus"></span> Nuevo 
			</a>

			<button id="editar" class="btn btn-default" data-toggle= 'modal' data-target='#myModal'>
				<span class="glyphicon glyphicon-edit"></span> Editar 
			</button>

			<button id="borrar" class="btn btn-default">
				<span class="glyphicon glyphicon-trash"></span> Borrar 
			</button>

			<button id="detalles" class="btn btn-default">
				<span class="glyphicon glyphicon-menu-hamburger"></span> Detalles 
			</button>				



				
 		

			<br><br>		
			

			<table id="lista" class="table table-striped mytable">

				<thead>
					<th>    </th>
					<th>N°  </th>
					<th>Cedula</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Sexo</th>
					<th>Edad</th>
					<th>Estado</th>
					<th>Paquete</th>
					<th>Telefono</th>
					<th>Nacimiento</th>
					<th>Permiso</th>				
				</thead>
				@php static $i=0; @endphp
				@foreach($viajeros as $viajero)
				<tbody>
					<td><input type="radio" name="item" value="{{ $viajero->id }}"></td>
					<td>@php echo ++$i; @endphp</td>
					<td>{{ $viajero->cedula }}</td>
					<td>{{ $viajero->nombre }}</td>	
					<td>{{ $viajero->apellido }}</td>
					<td>{{ $viajero->sexo }}</td>
					<td>{{ $viajero->edad }}</td>	
					<td>{{ $viajero->estado_pago }}</td>
					<td>{{ $viajero->id_paquete }}</td>	
					<td>{{ $viajero->telefono }}</td>						
					<td>{{ $viajero->fecha_nac }}</td>	
					<td>{{ $viajero->permiso }}</td>						
				</tbody>
				@endforeach
			</table>
		
		    <div class="col-md-4 col-md-offset-4 column">                                     
		        {{$viajeros->render()}}       
		    </div>	

		</div>
		</div>

	</div>
		



	@endsection

@section('scripts')
<script src="{{ asset('js/viajero/modify.js') }}" type="text/javascript"></script>
@endsection





{{-- 


 <a href="{{ route('usuario.edit',['id' => 1]) }}" class="btn btn-default">
 	<span class="glyphicon glyphicon-edit"></span> Editar
 </a>



<input type="radio" id="item" value="{{ $viajero->id }}">
<input type="checkbox" id="item" value="{{ $viajero->id }}">


							{!!Form::open(['route'=>['usuario.destroy',$viajero->id], 'method' => 'DELETE'])!!}						
											
								{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $viajero->id, $attributes = ['class'=>'btn btn-default'])!!}								
								
								
								{{ Form::hidden('id', $viajero->id) }}	
								{!!Form::submit('Borrar',['class'=>'btn btn-default'])!!}
							{!!Form::close()!!}	



--}}