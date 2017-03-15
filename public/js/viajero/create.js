
$(document).ready(function(){	 

 
	$('#createForm').submit(function(event){  

		event.preventDefault();   

			var route = "/viajero";		
			var token = $('#token').val(); 
			var form = {
					cedula:        $('#cedula').val(),
					nombre:        $('#nombre').val(),
					apellido:      $('#apellido').val(),
					sexo:          $('#sexo').val(),
					edad:  	  	   $('#edad').val(),
					estado_pago:   $('#estado_pago').val(),
					telefono:      $('#telefono').val(),  
					paquete:       $('#paquete').val(),
					fecha_nac:     $('#fecha_nac').val(),
					email:         $('#email').val(),
					permiso:       $('#permiso').val()
				};															
			
			$.ajax({
				url:      	route,
				headers:  	{'X-CSRF-TOKEN': token},
				type:     	'POST',
				dataType:   'json',
				data: 		form,
				success:function(res){   
					$('#exito').html('<h4>¡Viajero Guardado Correctamente!</h4>');
					$('#exito').fadeIn();
					$('#createForm')[0].reset();   						 
				},
				error: function(res) { 
	                $('#error').fadeIn();
	            } 							
			}); 

		



    });	





});	


/*






		var route = "/viajero";
		var token = $('#token').val();

		var data = {
				cedula:      $('#cedula').val(),
				nombre:      $('#nombre').val(),
				apellido:    $('#apellido').val(),
				edad:  	  	 $('#edad').val(),
				estado_pago: $('#estado_pago').val(),
				telefono:    $('#telefono').val(),
				email:       $('#email').val(),
				permiso:     $('#permiso').val(),
			};	

		$.post(
			route,
			data,
			function(){
				$('#exito').html('<h4>¡Viajero Guardado Correctamente!</h4>');
				$('#exito').fadeIn();					

			}
		);







*/





/*


	    $("#createForm").validate({
	        rules: {
	            cedula:      { required: true, minlength: 7 },
	            nombre:      { required: true, minlength: 2 },
	            apellido:    { required: true, minlength: 2 },
	            edad:        { required: true },
	            telefono:    { required: true },
	            email:       { required:true, email: true}
	        },
	        messages: {
	            cedula:      "Debe introducir número de cédula",
	            nombre:      "Debe introducir primer nombre",
	            apellido:    "Debe introducir primer apellido",
	            edad:        "Debe introducir edad",            
	            telefono:    "Debe introducir número de teléfono",
	            email :      "Debe introducir correo electrónico válido"
	        },
	        submitHandler: function(){  


	        }
	    });




	            cedula:      { required: "Debe introducir número de cédula", minlength: "El mínimo permitido son 7 caracteres" },
	            nombre:      { required: "Debe introducir primer nombre", minlength: "El mínimo permitido son 2 caracteres" },
	            apellido:    { required: "Debe introducir primer apellido", minlength: "El mínimo permitido son 2 caracteres" },
	            edad:        { required: "Debe introducir edad" },
	            telefono:    { required: "Debe introducir número de telefono" },
	            email:       { required: "Debe introducir correo electrónico", email: "Debe introducir correo electrónico válido"}	            

*/