


{{-- Mensaje Exito --}}

@if(Session::has('exito'))
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <h4>{{Session::get('exito')}}</h4>
	</div>	



{{-- Mensaje Error --}}

@elseif(Session::has('error'))
	<div class="alert alert-danger alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <h4>{{Session::get('error')}}</h4>
	</div>
@endif