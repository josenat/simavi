
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

 		

		$('#editar').click(function(){  // Evento mostrar datos a actualizar

			var id    = valor;
			var route = "/paquete/"+id+"/edit";

			$.get(
				route, 
				function(res){
					$('#tipo').val(res.tipo);	
					$('#costo').val(res.costo); 
					$('#descripcion').val(res.descripcion);					
				}
			);



			$('#modalForm').submit(function(event){ // Evento guardar datos actualizados

				event.preventDefault(); 

				var id    = valor;
				var route = "/paquete/"+id+"";		
				var token = $('#token').val(); 
				var form = {
						tipo:        $('#tipo').val(),
						costo:       $('#costo').val(),
						descripcion: $('#descripcion').val()
					};															
				
				$.ajax({
					url:      	route,
					headers:  	{'X-CSRF-TOKEN': token},
					type:     	'PUT',
					dataType: 	'json',
					data: 		form,
					success:function(res){   							
						$("#myModal").modal('toggle');				
						$('#exito').html('<h4>¡Paquete Actualizado Correctamente!</h4>');
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
			var route = "/paquete/"+id+"";				
			var token = $('#token').val();  

			$.ajax({
				url:      route,
				headers:  {'X-CSRF-TOKEN': token},
				type:     'DELETE',
				dataType: 'json',
				success:function(res){
					$('#exito').html('<h4>¡Paquete Eliminado Correctamente!</h4>');
					$('#exito').fadeIn();
					location.reload(); 				
					
					
				},
				error: function(res){
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