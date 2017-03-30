@extends('layouts.admin')
 
	@section('content')	 


		<div class="container">

			<div class="container-list">

				@include('alerts.validation')	


				<div class="panel panel-default">
	  				<div class="panel-heading text-center">
	  					<h3><strong>Paquetes de Viaje</strong></h3>
	  				</div>
				</div>

				<br>

				<a href="/paquete/create" class="btn btn-default">
					<span class="glyphicon glyphicon-plus"></span> Nuevo 
				</a>

				<button id="editarPaquete" class="btn btn-default">
					<span class="glyphicon glyphicon-edit"></span> Editar 
				</button>

				<button id="borrarPaquete" class="btn btn-default">
					<span class="glyphicon glyphicon-trash"></span> Borrar 
				</button>

	  
				<br><br>		
				
				<div class="table-responsive">

					<table class="table table-striped" id="lista" >

						<thead>
							<th>    </th>
							{{-- <th>N°    </th> --}}
							<th>Tipo</th>
							<th>Descripcion</th>
							<th>Costo Bs</th>				
						</thead>
						@php static $i=0; @endphp
						@foreach($paquetes as $paquete)
							<tbody>
								<td><input type="radio" name="item" value="{{ $paquete->id }}"></td>
								{{-- <td>@php echo ++$i; @endphp</td> --}}
								<td>{{ $paquete->tipo }}</td>
								<td>{{ $paquete->descripcion }}</td>	
								<td>{{ number_format($paquete->costo) }}</td>						
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