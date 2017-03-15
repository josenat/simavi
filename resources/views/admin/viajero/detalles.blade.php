
@extends('layouts.admin')

	@section('content')	 

	
	<div class="list">	

		<div class="container">

		<div class="container-list">
			
			@include('admin.viajero.modal')	
			@include('admin.viajero.modalpago')	



			<h3 class="text-center"><u><strong> {{ $titulo }} </strong></u></h3><br>	


			<input type="hidden" id="id" value="{{ $viajero->id }}">
			<button id="editarViajero" class="btn btn-default" data-toggle= 'modal' data-target='#myModal'>
				<span class="glyphicon glyphicon-edit"></span> Editar 
			</button>		

			<a href="{{ url('/viajero') }}" class="btn btn-default">
				<span class="glyphicon glyphicon-step-backward"></span> Atrás 
			</a>
			
			<br><br>

			<table id="lista" class="table table-striped mytable">

				<thead>
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

			@include('alerts.js.exito')	

			<h3 class="text-center"><u><strong> Pagos Realizados </strong></u></h3><br>				

			
			<a href="{{URL::to('/viajero/est/'.$viajero->id)}}" class="btn btn-success">
				<span class="glyphicon glyphicon-check"></span> Solvente
			</a>

			<a href="{{URL::to('/pago/ced/'.$viajero->cedula.'/'.$viajero->id)}}" class="btn btn-default">
				<span class="glyphicon glyphicon-plus"></span> Nuevo
			</a>

			<button id="editarPago" class="btn btn-default" data-toggle= 'modal' data-target='#myModal'>
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
<script src="{{ asset('js/modifyDetalles.js') }}" type="text/javascript"></script>
@endsection
