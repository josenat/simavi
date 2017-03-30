 
@extends('layouts.admin') 

	@section('content')	 

		<div class="container">
	 
			<div class="container-list">

				@include('alerts.validation')			
										
									
				<div class="panel panel-default">
	  				<div class="panel-heading text-center">
	  					<h3><strong>Lista de Viajeros</strong></h3>
	  				</div>
				</div>

				<br>

				<div class="container-fluid">	

					<div class="inline">				
						<a href="/viajero/create" class="btn btn-default">
							<span class="glyphicon glyphicon-plus"></span> Nuevo 
						</a>			

						<button id="editarViajero" class="btn btn-default">
							<span class="glyphicon glyphicon-edit"></span> Editar 
						</button>

						<button id="borrarViajero" class="btn btn-default">
							<span class="glyphicon glyphicon-trash"></span> Borrar 
						</button>		

						<button id="detalles" class="btn btn-default">
							<span class="glyphicon glyphicon-menu-hamburger"></span> Detalles 
						</button>	
					</div>				

					<div class="navbar-right">
						<div class="container-fluid">
							<ul class="none">																			
								<li class="dropdown">
									<button class="btn btn-default dropdown-toggle " data-toggle="dropdown" role="button">
										{{$orden}} <span class="caret"></span> 
									</button>						
									<ul class="dropdown-menu">	
										<li>
											<a href="{{ url('/viajero/orden/cedula') }}" class="text-center">
												Cédula 
											</a>
										</li>
										<li class="divider"></li>									
										<li>
											<a href="{{ url('/viajero') }}" class="text-center">
												Nombre 
											</a>
										</li>	
										<li class="divider"></li>
										<li>
											<a href="{{ url('/viajero/orden/sexo') }}" class="text-center">
												Sexo
											</a>
										</li>		
										<li class="divider"></li>	
										<li>
											<a href="{{ url('/viajero/orden/edad') }}" class="text-center">
												Edad
											</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="{{ url('/viajero/orden/estado') }}" class="text-center">
												Estado 
											</a>
										</li>
										<li class="divider"></li>																												
										<li>
											<a href="{{ url('/viajero/orden/paquete') }}" class="text-center">
												Paquete 
											</a>
										</li>																											
									</ul>
								</li>																																												
							</ul>			
						</div>
					</div>	

				</div>

				<br>	
				

				<div class="table-responsive">
					<table class="table table-striped"  id="lista">

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
<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
@endsection




{{--


{{ URL::route('name.route', [$val->id] }}

{{ route('name.route', ['id' => $val->id] }}

{{ action('MyController@show', $val->id) }}

{{ url('inicio/seccion/', [$val->id] }}




if($request->isMethod('post')){
    echo "Estoy recibiendo por post";
}




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