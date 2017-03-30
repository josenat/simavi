
@extends('layouts.admin')
 
	@section('content')	 


		<div class="container">

			<div class="container-list">

				@include('alerts.validation')				
						
		
				<div class="panel panel-default">
	  				<div class="panel-heading text-center">
	  					<h3><strong>Lista de Pagos</strong></h3>
	  				</div>
				</div>

				<br>	

				<div class="container-fluid">

					<div class="inline">
						<a href="/pago/create" class="btn btn-default">
							<span class="glyphicon glyphicon-plus"></span> Nuevo 
						</a>

						<button id="editarPago" class="btn btn-default">
							<span class="glyphicon glyphicon-edit"></span> Editar 
						</button>

						<button id="borrarPago" class="btn btn-default">
							<span class="glyphicon glyphicon-trash"></span> Borrar 
						</button>
					</div>


					<div class="inline" style="padding-left: 2%">
						<label class="inline"><h4><strong> Monto Total Bs: </strong></h4></label>
						<input class="inline input-text text-center" type="text"  value="{{ number_format($total) }}">
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
											<a href="{{ url('/pago') }}" class="text-center">
												Fecha
											</a>
										</li>								
										<li class="divider"></li>
										<li>
											<a href="{{ url('/pago/orden/cedula') }}" class="text-center">
												Cédula
											</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="{{ url('/pago/orden/descripcion') }}" class="text-center">
												Descripción
											</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="{{ url('/pago/orden/monto') }}" class="text-center">
												Monto
											</a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="{{ url('/pago/orden/metodo') }}" class="text-center">
												Método
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

					<table id="lista2" class="table table-striped mytable">
						<thead>
							<th>    </th>
							<th>N°  </th>
							<th>Cédula</th>
							<th>Descripcion</th>
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
							<td>{{ $pago->descripcion }}</td>
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
			
			</div> {{-- fin container-list--}}

		</div> {{-- fin container--}}
		

	@endsection

@section('scripts')
<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
@endsection
