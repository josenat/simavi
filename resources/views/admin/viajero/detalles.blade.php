
@extends('layouts.admin')

	@section('content')	 

	
	<div class="list">	

		<div class="container">

		<div class="container-list">

			@include('alerts.validation')

			<h3 class="text-center"><u><strong> {{ $titulo }} </strong></u></h3><br>	


			<a href="{{ url('/viajero') }}" class="btn btn-default">
				<span class="glyphicon glyphicon-arrow-left"></span> Atrás 
			</a>
			
			<button id="editarViajero" class="btn btn-default">
				<span class="glyphicon glyphicon-edit"></span> Editar 
			</button>		
			
			<br><br>

			<table id="lista" class="table table-striped mytable">

				<thead>
					<th></th>
					<th>Cedula</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Sexo</th> 
					<th>Edad</th>
					<th>Estado</th>
					<th>Paquete</th>
					<th>Telefono</th>
					<th>Nacimiento</th>
					<th>Correo</th>
					<th>Permiso</th>				
				</thead>
					<tbody>
						<td><input type="radio" name="item" value="{{ $viajero->id }}"></td>
						<td>{{ $viajero->cedula }}</td>
						<td>{{ $viajero->nombre }}</td>	
						<td>{{ $viajero->apellido }}</td>
						<td>{{ $viajero->sexo }}</td>
						<td>{{ $viajero->edad }}</td>	
						<td>{{ $viajero->estado_pago }}</td>
						<td>{{ $viajero->id_paquete }}</td>	
						<td>{{ $viajero->telefono }}</td>						
						<td>{{ $viajero->fecha_nac }}</td>
						<td>{{ $viajero->email }}</td>	
						<td>{{ $viajero->permiso }}</td>						
					</tbody>
				
			</table>
 
			<br>
 
			

			<h3 class="text-center"><u><strong> Pagos Realizados </strong></u></h3><br>				

			
			<a href="{{URL::to('/viajero/estado/'.$viajero->id)}}" class="btn btn-success">
				<span class="glyphicon glyphicon-check"></span> Solvente
			</a>

			<a href="{{URL::to('/pago')}}" class="btn btn-default">
				<span class="glyphicon glyphicon-list"></span> Todos
			</a>			

			<a href="{{URL::to('/pago/create/'.$viajero->cedula.'/'.$viajero->id)}}" class="btn btn-default">
				<span class="glyphicon glyphicon-plus"></span> Nuevo
			</a>

			<button id="editarPago" class="btn btn-default">
				<span class="glyphicon glyphicon-edit"></span> Editar 
			</button>

			<button id="borrarPago" class="btn btn-default">
				<span class="glyphicon glyphicon-trash"></span> Borrar 
			</button>
						

			<br><br>	
{{-- --}}
			<table id="lista2" class="table table-striped mytable">
				<thead>
					<th>    </th>
					<th>N°  </th>
					<th>Cédula</th>
					<th>Monto Bs</th>
					<th>Método</th>
					<th>Fecha</th>
					<th>Recibo</th>
					<th>Banco</th>
					<th>Representante</th>				
				</thead>
				@php static $i=0; @endphp
				@foreach($pagos as $pago)					
				<tbody>
					<td><input type="radio" name="item" value="{{ $pago->id }}"></td>
					<td>@php echo ++$i; @endphp</td>
					<td>{{ $pago->cedula }}</td>
					<td>{{ number_format($pago->monto) }}</td>
					<td>{{ $pago->metodo }}</td>	
					<td>{{ $pago->fecha }}</td>
					<td>{{ $pago->num_recibo }}</td>
					<td>{{ $pago->banco }}</td>	
					<td>{{ $pago->admin }}</td>						
				</tbody>
				@endforeach
			</table>			
			


		

		</div>
		</div>

	</div>
		



	@endsection

@section('scripts')
<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
@endsection
