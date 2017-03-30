
	<nav class="navbar navbar-default navbar-inverse" style="padding-top: 5px;"> 


		<div class="inline">
		<div class="container-fluid">
			<!-- Titulo Barra Navegacion -->
			<a class="navbar-brand" href=""><img src="{{ asset('images/logoSimavi.png')}}"></a> 
			<a class="navbar-brand" href=""><small>Sistema Matriculación Viaje</small></a> 
		</div>
		</div>


		@php 			
			

			// si el user está logueado
			if(\Auth::check()){

				// si es de tipo desarrollador o administrador del sitio web
				$user = \Auth::user();
				if($user->tipo == 1 || $user->tipo == 2) {																      
		@endphp	
				<div class="inline navbar-right">
				<div class="container-fluid">

					<!-- Parte 1 -->
					<div class="navbar-header">
						<!-- Boton Menú Navegacion Movil -->
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false">
							<span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>				
					</div>

					<!-- Parte 2 -->					
					<div class="collapse navbar-collapse" id="navbar1">		
						<!-- Botones Navegación -->
						<ul class="nav navbar-nav">																			

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
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
									{{ \Auth::user()->name }} <span class="caret"></span>  
								</a>						
								<ul class="dropdown-menu">	
									<li>
										<a href="{{ url('/config/page/excel') }}" class="text-center">
											<span class="glyphicon glyphicon-export"></span> Exportar 
										</a>
									</li>
										@php 			
											// si el user es el desarrollador del sitio web
											if($user->tipo == 1) {																      
										@endphp									
											<li class="divider"></li>
											<li>						
									            <a href="{{ url('/admin/register') }}" class="text-center"> 
							                        <span class="glyphicon glyphicon-log-in"></span> Registrar 
							                    </a>
											</li>	
										@php 			
											}																      
										@endphp									
									<li class="divider"></li>														 	
									<li><a href="/logout" class="text-center"> 
											<span class="glyphicon glyphicon-off"></span> Cerrar sesión
										</a>
									</li>
								</ul>
							</li>																					
																								
						</ul>					
						<!-- 
						<form action="" class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Buscar">
							</div>
						</form>	
						-->	
					</div>


					
				</div>
				</div>

		@php							
				}
				// sino entonces el user es de tipo estándar
				else{
		@endphp
				
				<div class="collapse navbar-collapse" id="navbar1">		
					<!-- Botones Navegación -->
					<ul class="nav navbar-nav navbar-right">																			
	
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								{{ \Auth::user()->name }} <span class="caret"></span>  
							</a>						
							<ul class="dropdown-menu">	
								<li>
									<a href="{{ url('/config/page/excel') }}" class="text-center">
										<span class="glyphicon glyphicon-export"></span> Exportar 
									</a>
								</li>								
								<li class="divider"></li>														 	
								<li><a href="/logout" class="text-center"> 
										<span class="glyphicon glyphicon-off"></span> Cerrar Sesión
									</a>
								</li>
							</ul>
						</li>																					
																							
					</ul>	
				</div>



		@php
				}// fin else

			}// fin if
		@endphp

		


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




{{-- 


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div> <!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>﻿

--}}