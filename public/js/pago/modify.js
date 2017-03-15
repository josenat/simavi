
$(document).ready(function(){	 

	// elemento radio button
	var radio = "";
	// valor del radio button marcado
	var valor = "";


	// por defecto desactivamos botones
	$('#editar').prop('disabled', true);
	$('#borrar').prop('disabled', true);




 	// obtener elemento input radio
 	radio = $("table input:radio");
 	$("table input:radio").click(function() { // Evento presionar radio button    

		// obtener valor del elemento radio button marcado
		valor = getValorRadioButton(radio);
		// activar botones
	    $('#editar').prop('disabled', false);
		$('#borrar').prop('disabled', false); 	

 		

		$('#editar').click(function(){  // Evento obtener datos a actualizar

			var id    = valor;
			var route = "/pago/"+id+"/edit";

			$.get(
				route, 
				function(res){
					$('#monto').val(res.monto);	
					$('#metodo').val(res.metodo); 
					$('#fecha').val(res.fecha);
					$('#num_recibo').val(res.num_recibo);
					$('#banco').val(res.banco);
				}
			);



			$('#modalForm').submit(function(event){ // Evento guardar datos actualizados

				event.preventDefault(); 

				var id    = valor;
				var route = "/pago/"+id+"";		
				var token = $('#token').val(); 
				var form = {
						monto:        $('#monto').val(),
						metodo:       $('#metodo').val(),
						fecha:        $('#fecha').val(),
						num_recibo:   $('#num_recibo').val(),
						banco:        $('#banco').val()
					};															
				
				$.ajax({
					url:      	route,
					headers:  	{'X-CSRF-TOKEN': token},
					type:     	'PUT',
					dataType: 	'json',
					data: 		form,
					success:function(res){   							
						$("#myModal").modal('toggle');				
						$('#exito').html('<h4>¡Pago Editado Correctamente!</h4>');
						$('#exito').fadeIn();
						location.reload(); 																
					},
					error: function(res) { 
		                $('#error').fadeIn();
		            } 							
				}); 
			});			
		});	



		$('#borrar').click(function(){ // Evento eliminar datos

			var id    = valor;
			var route = "/pago/"+id+"";				
			var token = $('#token').val();  

			$.ajax({
				url:      route,
				headers:  {'X-CSRF-TOKEN': token},
				type:     'DELETE',
				dataType: 'json',
				success:function(res){
					$('#exito').html('<h4>¡Pago Eliminado Correctamente!</h4>');
					$('#exito').fadeIn();
					location.reload(); 				
					
					
				},
				error: function(res){
					$('#error').fadeIn();
				}
			});

		});	 





		$('#modalFormCreate').submit(function(event){ // Evento guardar nuevos datos

			event.preventDefault();   

			var route = "/pago/cedula/";		
			var token = $('#token').val(); 
			var form = {
					cedula:       $('#cedula_viajero').val(),
					monto:        $('#monto').val(),
					metodo:       $('#metodo').val(),
					fecha:        $('#fecha').val(),
					num_recibo:   $('#num_recibo').val(),
					banco:        $('#banco').val()
				};															
			
			$.ajax({
				url:      	route,
				headers:  	{'X-CSRF-TOKEN': token},
				type:     	'POST',
				dataType:   'json',
				data: 		 form,
				success:function(res){   
					$('#exito').html('<h4>¡Pago Registrado Correctamente!</h4>');
					$('#exito').fadeIn();  
					$('#modalFormCreate')[0].reset();  						 
				},
				error: function(res) { 
	                $('#error').fadeIn();  
	            } 							
			}); 

		});	





 	});//fin evento click radio button

});//fin document	



function getValorRadioButton(radio){ //Funcion obtener valor radio button

    for(i = 0; i < radio.length; i++){
        if(radio[i].checked){ 
        	return radio[i].value;
		}
    }
}