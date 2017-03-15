
	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse"> 
			<br>

			<!-- Parte 1 - Titulo Barra Navegacion y Boton Movil-->
			<div class="navbar-header navbar-left">
				<!-- Boton Resumen Navegacion Movil -->
				<button type="button" class="navbar navbar-toggle collapsed" data-toggle="collapsed" data-target="#navbar-1">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Titulo Barra Navegacion -->
				<a class="navbar-brand" href=""><img src="{{ asset('images/logoSimavi.png')}}"></a> 
				<a class="navbar-brand" href=""><small>Sistema Matriculación Viaje</small></a> 				
			</div>

			<!-- Parte 2 - Botones Navegación y Logout -->			
			<div class="collapsed navbar-collapse nav-butt-right">
				<ul class="nav navbar-nav navbar-right">																			

					@php 
						if(\Auth::check()) {	        
					@endphp	

							<li><a href="/viajero"> 
									<span class="glyphicon glyphicon-user"></span> Viajeros
								</a>
							</li>				
							<li><a href="/pago">
									<span class="glyphicon glyphicon-usd"></span> Pagos
								</a>
							</li>
							<li><a href="/paquete">
									<span class="glyphicon glyphicon-briefcase"></span> Paquetes
								</a>
							</li>	

							<li>
								<a href="{{ url('/config/page/excel') }}">
									<span class="glyphicon glyphicon-export"></span> Exportar 
								</a>
							</li>

							
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
									{{ \Auth::user()->name }} <span class="caret"></span>  
								</a>						
								<ul class="dropdown-menu">									 	
									<li><a href="/logout" class="text-center">Cerrar Sesión</a></li>
								</ul>
							</li>	
					@php							
						}
					@endphp
																						
						
					
{{-- 
					@php 
						if(\Auth::check()){

							$user = \Auth::user();
							if($user->tipo == 1){	        
					@endphp						  
											
					@php
							} 								
					@endphp
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
									{{ Auth::user()->name }} <span class="caret"></span>  
								</a>						
								<ul class="dropdown-menu">									 	
									<li><a href="#" class="text-center">Cerrar Sesión</a></li>
								</ul>
							</li>	
					@php							
						}
					@endphp
--}}
							
																					
				</ul>
						
				<!-- 
				<form action="" class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Buscar">
					</div>
				</form>	
				-->	

			</div>	
			<br>
	</nav>	




{{-- 

<span class="glyphicon glyphicon-off"></span>

li*4>a[href="#"]{Item #$}   <li class="divider"></li> 



						@include('admin.viajeros.nav')					

						<li class="dropdown ">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								<span class="caret"></span>  
							</a>						
							<ul class="dropdown-menu">									 	
								<li><a href="#" class="text-center">Cerrar Sesión</a></li>
							</ul>
						</li>	

--}}