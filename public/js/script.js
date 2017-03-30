
$(document).ready(function(){	 
                                     
	// elemento radio button
	var radio = "";
	// valor del radio button marcado
	var valor = "";
	// obtener elemento input radio
 	radio = $("table input:radio");


	// por defecto desactivamos botones 
	$('#editarViajero').prop('disabled', true);
	$('#borrarViajero').prop('disabled', true);
	$('#detalles').prop('disabled', true);
	
	$('#editarPago').prop('disabled', true);
	$('#borrarPago').prop('disabled', true);

	
	$('#editarPaquete').prop('disabled', true);
	$('#borrarPaquete').prop('disabled', true);
	



 	$("table input:radio").click(function() { // Evento presionar radio button    

		// obtener valor del elemento radio button marcado
		valor = getValorRadioButton(radio);
		// al marcar el elemento, activamos botones
	    $('#editarViajero').prop('disabled', false);
		$('#borrarViajero').prop('disabled', false); 
		$('#detalles').prop('disabled', false);	

		$('#editarPago').prop('disabled', false);
		$('#borrarPago').prop('disabled', false);


		$('#editarPaquete').prop('disabled', false);
		$('#borrarPaquete').prop('disabled', false);		

 		
		// obtener id del objeto seleccionado (viajero, paquete, pago, etc)
		var id = valor;



		//###############################  VIAJERO  ###################################

		$('#editarViajero').click(function(){ // Evento mostrar datos a actualizar

			window.location.href = "/viajero/"+id+"/edit";			
		}); 

		
		$('#borrarViajero').click(function(){ // Evento borrar datos

			window.location.href = "/viajero/"+id+"/delete";
			
		}); 


		$('#detalles').click(function(){ // Evento mostrar detalles

			window.location.href = "/viajero/detalles/"+id;
			
		}); 				



		//################################  PAGO  #####################################


		$('#editarPago').click(function(){ // Evento mostrar datos a actualizar

			window.location.href = "/pago/"+id+"/edit";
			
		}); 

		
		$('#borrarPago').click(function(){ // Evento borrar datos

			window.location.href = "/pago/"+id+"/delete";
			
		}); 		




		//###############################  PAQUETE  ###################################


		$('#editarPaquete').click(function(){ // Evento mostrar datos a actualizar

			window.location.href = "/paquete/"+id+"/edit";
			
		}); 

		
		$('#borrarPaquete').click(function(){ // Evento borrar datos

			window.location.href = "/paquete/"+id+"/delete";
			
		}); 		





 	});//fin evento click radio button




});







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
	jQuery.browser = {};
	jQuery.browser.mozilla = /mozilla/.test(navigator.userAgent.toLowerCase()) && !/webkit/.test(navigator.userAgent.toLowerCase());
	jQuery.browser.webkit = /webkit/.test(navigator.userAgent.toLowerCase());
	jQuery.browser.opera = /opera/.test(navigator.userAgent.toLowerCase());
	jQuery.browser.msie = /msie/.test(navigator.userAgent.toLowerCase());

	if($.browser.mozilla == true){  
				
		$('.izquierda').html('');
		$('.footer').html('');

		return false;
	}

	
	if($.browser.msie){
					
	     //codigo
				
	}
			

	if($.browser.webkit || $.browser.safari){

				
	     //codigo
	}				

				
	if($.browser.opera){
					
	     //codigo

	}

*/



/*

	$('#select').click(function(){
		alert( $('#select option:selected').text() );
	});

*/