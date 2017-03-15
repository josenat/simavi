
$(document).ready(function(){	 

 
	$('#createForm').submit(function(event){ 

		event.preventDefault();   

		var route = "/pago";		
		var token = $('#token').val(); 
		var form = {
				cedula:       $('#cedula').val(),
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
				$('#createForm')[0].reset();  						 
			},
			error: function(res) { 
                $('#error').fadeIn();  
            } 							
		}); 

		



    });	





});	