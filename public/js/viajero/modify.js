
$(document).ready(function(){	 

	// elemento radio button
	var radio = "";
	// valor del radio button marcado
	var valor = "";
	// obtener elemento input radio
 	radio = $("table input:radio");



	// por defecto desactivamos botones
	$('#editar').prop('disabled', true);
	$('#borrar').prop('disabled', true);
	$('#detalles').prop('disabled', true);





 	$("table input:radio").click(function() { // Evento presionar radio button    

		// obtener valor del elemento radio button marcado
		valor = getValorRadioButton(radio);
		// al marcar el elemento, activamos botones
	    $('#editar').prop('disabled', false);
		$('#borrar').prop('disabled', false); 
		$('#detalles').prop('disabled', false);	

 		

		$('#editar').click(function(){  // Evento mostrar datos a actualizar

			var id    = valor;
			var route = "/viajero/"+id+"/edit";

			$.get(
				route, 
				function(res){
					$('#id').val(res.id);	
					$('#cedula').val(res.cedula); 
					$('#nombre').val(res.nombre); 
					$('#apellido').val(res.apellido); 
					$('#sexo').val(res.sexo);
					$('#edad').val(res.edad); 
					$('#estado_pago').val(res.estado_pago); 
					$('#telefono').val(res.telefono); 
					$('#paquete').val(res.id_paquete);
					$('#fecha_nac').val(res.fecha_nac); 
					$('#email').val(res.email); 
					$('#permiso').val(res.permiso); 
				}
			);



			$('#modalForm').submit(function(event){ // Evento actualizar datos

				event.preventDefault();

				var id    = valor;
				var route = "/viajero/"+id+"";		
				var token = $('#token').val(); 
				var form = {
						cedula:        $('#cedula').val(),
						nombre:        $('#nombre').val(),
						apellido:      $('#apellido').val(),
						sexo:          $('#sexo').val(),
						edad:  	  	   $('#edad').val(),
						estado_pago:   $('#estado_pago').val(),
						telefono:      $('#telefono').val(),
						id_paquete:    $('#paquete').val(),
						fecha_nac:     $('#fecha_nac').val(),
						email:         $('#email').val(),
						permiso:       $('#permiso').val()
					};															
				
				$.ajax({
					url:      	route,
					headers:  	{'X-CSRF-TOKEN': token},
					type:     	'PUT',
					dataType: 	'json',
					data: 		form,
					success:function(res){   							
						$("#myModal").modal('toggle');				
						$('#exito').html('<h4>¡Viajero Actualizado Correctamente!</h4>');
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
			var route = "/viajero/"+id+"";				
			var token = $('#token').val();  

			$.ajax({
				url:      route,
				headers:  {'X-CSRF-TOKEN': token},
				type:     'DELETE',
				dataType: 'json',
				success:function(res){
					$('#exito').html('<h4>¡Viajero Eliminado Correctamente!</h4>');
					$('#exito').fadeIn();
					location.reload(); 				
					
					
				},
				error: function(res){
					$('#error').fadeIn();
				}
			});

		});	




		$('#detalles').click(function(){ // Evento ver detalles del viajero

			var id = valor;
			window.location.href = "/viajero/"+id;

			/* para esta funcion no se utilizó la etiqueta <a> de html sino una
			   función javascript para lograr tratar al elemento como un boton,
			   y así desactivarlo con .prop('disabled', true);
			*/
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



function setResetRadioButton(radio){

	// reiniciar radio button
    for(i = 0; i < radio.length; i++){
        
        radio[i].checked = false;
    }
}









/*
function Listar(){ //Funcion listar viajeros
	
	var route     =  "/viajero";  // obtener ruta del controlador
	var i;                        // contador
	$('#tbody').empty();          // limpiar la tabla
	var tableData =  $("#tbody"); // obtener los valores de la tabla		
	
	$.ajax({
		url: route , 
		success: function(res){	   
			// actualizamos la tabla con los valores devueltos por el servidor   
			i=0;
	        $(res).each(function(key,value){

	            tableData.append(	            	
					"<tr><td><input type='radio' name='item' value='"+ value.id +"'></td>"+
				      "<td>"+ ++i +"</td>"+
				      "<td>"+ value.cedula      +"</td>"+
				      "<td>"+ value.nombre      +"</td>"+
				      "<td>"+ value.apellido    +"</td>"+
				      "<td>"+ value.edad        +"</td>"+
				      "<td>"+ value.estado_pago +"</td>"+
				      "<td>"+ value.telefono    +"</td>"+
				      "<td>"+ value.fecha_nac   +"</td>"+
				      "<td>"+ value.email       +"</td>"+
				      "<td>"+ value.permiso     +"</td>"+	            				      
				  "</tr>"
				 );  
	        });

	    }//fin success funcion
	
	});//fin ajax	
}
*/


/*

	            	"<tr>"+
					  "<th>    </th>"+
					  "<th>N°    </th>"+
					  "<th>Cedula</th>"+
					  "<th>Nombre</th>"+
					  "<th>Apellido</th>"+
					  "<th>Edad</th>"+
					  "<th>Estado</th>"+
					  "<th>Telefono</th>"+
					  "<th>Nacimiento</th>"+
					  "<th>Nacimiento</th>"+
					  "<th>Permiso</th>"+ 
					"</tr>"+


*/