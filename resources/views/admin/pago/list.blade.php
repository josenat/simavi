
@extends('layouts.admin')
 
	@section('content')	 

	
	<div class="list">	

		<div class="container">

		<div class="container-list">

			@include('alerts.js.exito')	
			@include('admin.pago.modal')		


			<div class="header-page">

			<div class="panel panel-default">
  				<div class="panel-heading text-center">
  					<h3><strong>Lista de Pagos</strong></h3>
  				</div>
			</div>

				<br>	

				<div class="izquierda-page">
					<a href="/pago/create" class="btn btn-default">
						<span class="glyphicon glyphicon-plus"></span> Nuevo 
					</a>

					<button id="editar" class="btn btn-default" data-toggle= 'modal' data-target='#myModal'>
						<span class="glyphicon glyphicon-edit"></span> Editar 
					</button>

					<button id="borrar" class="btn btn-default">
						<span class="glyphicon glyphicon-trash"></span> Borrar 
					</button>
				</div>

				<div class="centro-page">
					<h4><strong> Monto Total Bs: </strong></h4>	
				</div>

				<div class="derecha-page">						
					<input id="total" type="text" class="text-center" value="{{ number_format($total) }}">
				</div>

				
			</div>

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
<script src="{{ asset('js/pago/modify.js') }}" type="text/javascript"></script>
@endsection
