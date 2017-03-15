@extends('layouts.admin')
 
	@section('content')	 

	
	<div class="list">	


		<div class="container">

		<div class="container-list">

			@include('alerts.js.exito')	
			@include('admin.paquete.modal')		

			<div class="panel panel-default">
  				<div class="panel-heading text-center">
  					<h3><strong>Paquetes de Viaje</strong></h3>
  				</div>
			</div>

			<a href="/paquete/create" class="btn btn-default">
				<span class="glyphicon glyphicon-plus"></span> Nuevo 
			</a>

			<button id="editar" class="btn btn-default" data-toggle= 'modal' data-target='#myModal'>
				<span class="glyphicon glyphicon-edit"></span> Editar 
			</button>

			<button id="borrar" class="btn btn-default">
				<span class="glyphicon glyphicon-trash"></span> Borrar 
			</button>

  
			<br><br>		
			

			<table id="lista" class="table table-striped mytable">

				<thead>
					<th>    </th>
					{{-- <th>N°    </th> --}}
					<th>Tipo</th>
					<th>Costo</th>
					<th>Descripcion</th>				
				</thead>
				@php static $i=0; @endphp
				@foreach($paquetes as $paquete)
					<tbody>
						<td><input type="radio" name="item" value="{{ $paquete->id }}"></td>
						{{-- <td>@php echo ++$i; @endphp</td> --}}
						<td>{{ $paquete->tipo }}</td>
						<td>{{ number_format($paquete->costo) }}</td>	
						<td>{{ $paquete->descripcion }}</td>						
					</tbody>
				@endforeach
			</table>
		
		    <div class="col-md-4 col-md-offset-4 column">                                     
		        {{-- {{$paquetes->render()}}   --}}
		    </div>	

		</div>
		</div>


	</div>
		
	@endsection


@section('scripts')
<script src="{{ asset('js/paquete/modify.js') }}" type="text/javascript"></script>
@endsection	